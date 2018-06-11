<?php

namespace AppBundle\Security;

use AppBundle\Entity\Comment;
use AppBundle\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\AccessDecisionManagerInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;

class CommentVoter extends Voter
{

    /**
     * @var AccessDecisionManagerInterface
     */
    private $decisionManager;

    public function __construct(AccessDecisionManagerInterface $decisionManager)
    {
        $this->decisionManager = $decisionManager;
    }

    const DEL = 'delete';
    const EDIT = 'edit';

    /**
     * @param string $attribute
     * @param mixed $subject
     * @return bool
     */
    protected function supports($attribute, $subject)
    {
        if (!in_array($attribute, [self::DEL, self::EDIT])) {
            return false;
        }

        if (!$subject instanceof Comment) {
            return false;
        }

        return true;
    }

    /**
     * @param string $attribute
     * @param mixed $subject
     * @param TokenInterface $token
     * @return bool
     */
    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();

        if (!$user instanceof User) {
            return false;
        }

        if ($this->decisionManager->decide($token, ['ROLE_ADMIN'])) {
            return true;
        }

        $comment = $subject;

        switch ($attribute) {
            case self::DEL:
                return $this->canDelete($comment, $user);
            case self::EDIT:
                return $this->canEdit($comment, $user);
        }

        throw new \LogicException('This exception should never be triggered');
    }

    /**
     * @param Comment $comment
     * @param User $user
     * @return bool
     */
    public function canDelete(Comment $comment, User $user)
    {
        return $comment->getUser() === $user;
    }

    public function canEdit(Comment $comment, User $user)
    {
        return $comment->getUser() === $user;
    }
}