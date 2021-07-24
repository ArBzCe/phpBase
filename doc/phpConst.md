## 常量 const
### 使用const关键字或define()函数定义一个常量
#### 1.常量前面没有$符号，常量名必须大写（为什么官方不强制要求，我很疑惑），区分大小写
#### 2.作用域对常量没有要求
#### 3.常量定义后不可取消，不可重复，值不可变
#### 4.只能计算标量值或数组（不太理解）
    define("LUKAS",2233);
    const PEKO="well";
    define("ANIMALS",array('dog','pig','bigFaceCat'));
    ErorrExample:const peko=2233;
### 类常量
#### 作用域只在本类和具有继承关系中有效
#### 只使用const关键字定义

### 魔术常量
#### 一些php当前状态的常量