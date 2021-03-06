<?php
/**
 * 类适配器模式的PHP简单实现2010-07-10 sz
 * @author 胖子 phppan.p#gmail.com  http://www.phppan.com
 * 哥学社成员（http://www.blog-brother.com/）
 * @package design pattern
 */

/**
 * 目标角色
 */
interface Target {

    /**
     * 源类也有的方法1
     */
    public function sampleMethod1();

    /**
     * 源类没有的方法2
     */
    public function sampleMethod2();
}

/**
 * 源角色
 */
class Adaptee {

    /**
     * 源类含有的方法
     */
    public function sampleMethod1() {
        echo 'Adaptee sampleMethod1 <br />';
    }
}

/**
 * 类适配器角色
 */
class Adapter extends Adaptee implements Target {

    /**
     * 源类中没有sampleMethod2方法，在此补充
     */
    public function sampleMethod2() {
        echo 'Adapter sampleMethod2 <br />';
    }

}

class Client {

    /**
     * Main program.
     */
    public static function main() {
        $adapter = new Adapter();
        $adapter->sampleMethod1();
        $adapter->sampleMethod2();

    }

}

Client::main();
?>