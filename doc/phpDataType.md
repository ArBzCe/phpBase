## 数据类型 10 种

## 4种标量
### Boolean 布尔型
    $exampleBoolean = true;
    $exampleBoolean = false;
### Integer 整型
    $exampleInteger = 1;
    $exampleInteger = 0;
    $exampleInteger = -1;
### Float  浮点型
    $exampleFloat = 1.0;
### String 字符型
    $exampleString = "1";
    $exampleString = '1';

## 4种复合类型
### Array 数组
    $exampleArray = array(1,2);
### Object 对象
    $exampleObject = obj (new class{ function fun(){}});
### Callable 调用（粘合剂）
##### 通过一些系统函数直接使用程序上下文已有的 方法 函数 变量名称 作为参数来获得想要的结果
    function sayGood($say){
        echo "{$say}";
    } 
    class my {
        public function sayBad(){
            echo "Bad!";
        }
    }
    call_user_func("sayGood","well!");
    call_user_func(new my(),"sayBad"));
### Iterable 可迭代 还不理解待补
## 2种特殊类型
### Resource 资源
#### 外部资源的的引用 通过专门的函数来建立和使用
    URL算一种
### Null 无类型
#### 表示一个变量没有值
#### 一个变量被认为是null的情况
    1.被赋值为null
    2.尚未被赋值
    3.被unset()


