<?php
/**
 * Interface for stream contents.
 *
 * @package     bovigo_vfs
 * @version     $Id$
 */
/**
 * @ignore
 */
require_once dirname(__FILE__) . '/vfsStreamContainer.php';
/**
 * Interface for stream contents.
 *
 * @package     bovigo_vfs
 */
interface vfsStreamContent
{
    /**
     * stream content type: file
     *
     * @see  getType()
     */
    const TYPE_FILE = 0100000;
    /**
     * stream content type: directory
     *
     * @see  getType()
     */
    const TYPE_DIR  = 0040000;
    /**
     * stream content type: symbolic link
     *
     * @see  getType();
     */
    #const TYPE_LINK = 0120000;

    /**
     * returns the file name of the content
     *
     * @return  string
     */
    public function getName();

    /**
     * renames the content
     *
     * @param  string  $newName
     */
    public function rename($newName);

    /**
     * checks whether the container can be applied to given name
     *
     * @param   string  $name
     * @return  bool
     */
    public function appliesTo($name);

    /**
     * returns the type of the container
     *
     * @return  int
     */
    public function getType();

    /**
     * returns size of content
     *
     * @return  int
     */
    public function size();

    /**
     * alias for lastModified()
     *
     * @param   int               $filemtime
     * @return  vfsStreamContent
     * @see     lastModified()
     */
    public function setFilemtime($filemtime);

    /**
     * sets the last modification time of the stream content
     *
     * @param   int               $filemtime
     * @return  vfsStreamContent
     */
    public function lastModified($filemtime);

    /**
     * returns the last modification time of the stream content
     *
     * @return  int
     */
    public function filemtime();

    /**
     * adds content to given container
     *
     * @param   vfsStreamContainer  $container
     * @return  vfsStreamContent
     */
    public function at(vfsStreamContainer $container);

    /**
     * change file mode to given permissions
     *
     * @param   int               $permissions
     * @return  vfsStreamContent
     */
    public function chmod($permissions);

    /**
     * returns permissions
     *
     * @return  int
     */
    public function getPermissions();

    /**
     * change owner of file to given user
     *
     * @param   int               $user
     * @return  vfsStreamContent
     */
    public function chown($user);

    /**
     * checks whether file is owned by given user
     *
     * @param   int  $user
     * @return  bool
     */
    public function isOwnedByUser($user);

    /**
     * returns owner of file
     *
     * @return  int
     */
    public function getUser();

    /**
     * change owner group of file to given group
     *
     * @param   int               $group
     * @return  vfsStreamContent
     */
    public function chgrp($group);

    /**
     * checks whether file is owned by group
     *
     * @param   int   $group
     * @return  bool
     */
    public function isOwnedByGroup($group);

    /**
     * returns owner group of file
     *
     * @return  int
     */
    public function getGroup();
}
?>