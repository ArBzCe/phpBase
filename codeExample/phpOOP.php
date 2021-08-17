<?php
    Class SimpleClass
    {
        //成员变量 属性
        public $var = 'a default value';

        //成员方法
        public function displayVar(){
            echo $this->var;
        }

    }

    (new SimpleClass())->displayVar();