<?php
/**
 * Created by PhpStorm.
 * User: kvvn
 * Date: 5/11/14
 * Time: 1:21 PM
 */
$root = realpath($_SERVER["DOCUMENT_ROOT"]);

include "$root/Genres/Pop.php";
include "$root/Abstracts/IGroup.php";
include 'GroupsTrait.php';

class Kirkorov extends Pop implements IGroup
{

    use GroupsTrait;

    /**
     * @return string
     */
    public function SingASong()
    {
        return 'Нет, Киркоров мне не нравится. Слащавый он какой-то, подкрашенный весь, подпудренный как баба…';
    }

}