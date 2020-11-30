<?php

namespace app\models;

use jarvis\models\ModelObject;

/**
 * Author
 */
class Author extends ModelObject
{
    private string $nickname;
    private string $website;
    private string $email;
    private string $avatar;

    public function SetNickname($nickname)
    {
        $this->nickname = $nickname;
    }

    public function SetWebsite($website)
    {
        $this->nickname = $website;
    }

    public function SeEmail($email)
    {
        $this->nickname = $email;
    }

    public function SetAvatar($avatar)
    {
        $this->nickname = $avatar;
    }


    /**
     * GetNickName
     *
     * @return string
     */
    public function GetNickName()
    {
        return $this->nickname;
    }
    /**
     * GetWebSite
     *
     * @return string
     */
    public function GetWebSite()
    {
        return $this->website;
    }
    /**
     * GetEmail
     *
     * @return string
     */
    public function GetEmail()
    {
        return $this->email;
    }
    /**
     * GetAvatar
     *
     * @return string
     */
    public function GetAvatar()
    {
        return $this->avatar;
    }

    /**
     * GetAllData
     *
     * @return array
     */
    public function GetAllData(): array
    {
        return array(
            'nickname' => $this->nickname,
            'website' => $this->website,
            'email' => $this->email,
            'avatar' => $this->avatar
        );
    }
}
