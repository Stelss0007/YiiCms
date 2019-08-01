<?php

namespace app\modules\main\controllers;

class InstagramUserPost
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $shortcode;

    /**
     * @var integer
     */
    private $commentsCount;

    /**
     * @var integer
     */
    private $likeCount;

    /**
     * @var string
     */
    private $thumbnailSrc;

    /**
     * @var string
     */
    private $thumbnailSrcW640;

    /**
     * @var string
     */
    private $thumbnailSrcW480;

    /**
     * @var string
     */
    private $thumbnailSrcW320;

    /**
     * @var string
     */
    private $thumbnailSrcW240;

    /**
     * @var string
     */
    private $thumbnailSrcW150;

    /**
     * @var boolean
     */
    private $isVideo;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setText($value)
    {
        $this->text = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getShortcode()
    {
        return $this->shortcode;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setShortcode($value)
    {
        $this->shortcode = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getCommentsCount()
    {
        return $this->commentsCount;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setCommentsCount($value)
    {
        $this->commentsCount = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getLikeCount()
    {
        return $this->likeCount;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setLikeCount($value)
    {
        $this->likeCount = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailSrc()
    {
        return $this->thumbnailSrc;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setThumbnailSrc($value)
    {
        $this->thumbnailSrc = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailSrcW640()
    {
        return $this->thumbnailSrcW640;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setThumbnailSrcW640($value)
    {
        $this->thumbnailSrcW640 = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailSrcW480()
    {
        return $this->thumbnailSrcW480;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setThumbnailSrcW480($value)
    {
        $this->thumbnailSrcW480 = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailSrcW320()
    {
        return $this->thumbnailSrcW320;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setThumbnailSrcW320($value)
    {
        $this->thumbnailSrcW320 = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailSrcW240()
    {
        return $this->thumbnailSrcW240;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setThumbnailSrcW240($value)
    {
        $this->thumbnailSrcW240 = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getThumbnailSrcW150()
    {
        return $this->thumbnailSrcW150;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setThumbnailSrcW150($value)
    {
        $this->thumbnailSrcW150 = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function getisVideo()
    {
        return $this->isVideo;
    }

    /**
     * @param bool $value
     * @return $this
     */
    public function setIsVideo($value)
    {
        $this->isVideo = $value;

        return $this;
    }
}

class InstagramUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userName;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $biography;

    /**
     * @var string
     */
    private $externalUrl;

    /**
     * @var integer
     */
    private $followers;

    /**
     * @var integer
     */
    private $following;

    /**
     * @var integer
     */
    private $postsCount;

    /**
     * @var integer
     */
    private $highlightReelCount;

    /**
     * @var string
     */
    private $profileImageUrl;

    /**
     * @var string
     */
    private $profileImageUrlHd;

    /**
     * @var InstagramUserPost[]
     */
    private $posts;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setId($value)
    {
        $this->id = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserName()
    {
        return $this->userName;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setUserName($value)
    {
        $this->userName = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setFullName($value)
    {
        $this->fullName = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setBiography($value)
    {
        $this->biography = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getExternalUrl()
    {
        return $this->externalUrl;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setExternalUrl($value)
    {
        $this->externalUrl = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getFollowers()
    {
        return $this->followers;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFollowers($value)
    {
        $this->followers = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getFollowing()
    {
        return $this->following;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setFollowing($value)
    {
        $this->following = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getPostsCount()
    {
        return $this->postsCount;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setPostsCount($value)
    {
        $this->postsCount = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getHighlightReelCount()
    {
        return $this->highlightReelCount;
    }

    /**
     * @param int $value
     * @return $this
     */
    public function setHighlightReelCount($value)
    {
        $this->highlightReelCount = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileImageUrl()
    {
        return $this->profileImageUrl;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProfileImageUrl($value)
    {
        $this->profileImageUrl = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getProfileImageUrlHd()
    {
        return $this->profileImageUrlHd;
    }

    /**
     * @param string $value
     * @return $this
     */
    public function setProfileImageUrlHd($value)
    {
        $this->profileImageUrlHd = $value;

        return $this;
    }

    /**
     * @param InstagramUserPost $value
     * @return $this
     */
    public function addPost($value)
    {
        $this->posts[] = $value;

        return $this;
    }

    /**
     * @return InstagramUserPost[]
     */
    public function getPosts()
    {
        return $this->posts;
    }

}

class InstagramUserInfo
{
    /**
     * @var string
     */
    private $userName;

    /**
     * @param $userName
     */
    public function __construct($userName)
    {
        $this->userName = $userName;
    }

    /**
     * @return array
     * @throws \Exception
     */
    public function getUserInfoResponse()
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => sprintf('https://www.instagram.com/%s/?__a=1', $this->userName),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => [
                "cache-control: no-cache",
                "content-type: application/json",
            ],
        ]
        );

        $response = curl_exec($curl);
        $error = curl_error($curl);

        curl_close($curl);

        if ($error) {
            throw new \Exception($error);
        }

        return json_decode($response);
    }

    /**
     * @param $result
     * @return InstagramUser
     */
    public function normalize($result)
    {
        $userInfo =  new InstagramUser();
        $userInfo->setId($result->graphql->user->id);
        $userInfo->setUserName($result->graphql->user->username);
        $userInfo->setFullName($result->graphql->user->full_name);
        $userInfo->setBiography($result->graphql->user->biography);
        $userInfo->setExternalUrl($result->graphql->user->external_url);
        $userInfo->setFollowers($result->graphql->user->edge_followed_by->count);
        $userInfo->setFollowing($result->graphql->user->edge_follow->count);
        $userInfo->setProfileImageUrl($result->graphql->user->profile_pic_url);
        $userInfo->setProfileImageUrlHd($result->graphql->user->profile_pic_url_hd);
        $userInfo->setPostsCount($result->graphql->user->edge_owner_to_timeline_media->count);


        foreach ($result->graphql->user->edge_owner_to_timeline_media->edges as $instaPost) {
            $instagarmUserPost  = new InstagramUserPost();

            $instagarmUserPost->setId($instaPost->node->id);
            $instagarmUserPost->setShortcode($instaPost->node->shortcode);
            $instagarmUserPost->setText($instaPost->node->edge_media_to_caption->edges[0]->node->text);
            $instagarmUserPost->setLikeCount($instaPost->node->edge_liked_by->count);
            $instagarmUserPost->setCommentsCount($instaPost->node->edge_media_to_comment->count);
            $instagarmUserPost->setThumbnailSrc($instaPost->node->thumbnail_src);
            $instagarmUserPost->setThumbnailSrc($instaPost->node->thumbnail_src);
            $instagarmUserPost->setThumbnailSrcW150($instaPost->node->thumbnail_resources[0]);
            $instagarmUserPost->setThumbnailSrcW240($instaPost->node->thumbnail_resources[1]);
            $instagarmUserPost->setThumbnailSrcW320($instaPost->node->thumbnail_resources[2]);
            $instagarmUserPost->setThumbnailSrcW480($instaPost->node->thumbnail_resources[3]);
            $instagarmUserPost->setThumbnailSrcW640($instaPost->node->thumbnail_resources[4]);
            $instagarmUserPost->setIsVideo($instaPost->node->is_video);

            $userInfo->addPost($instagarmUserPost);
        }

        return $userInfo;
    }

    /**
     * @return mixed
     */
    public function getInfo()
    {
        return $this->normalize($this->getUserInfoResponse());
    }
}
