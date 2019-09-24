<?php
/**
 * MVC概述：
 * （1）MVC是一种编程思维，是一种软件设计的典范
 * （2）在MVC中，没有任何新的知识，每种语言，都有MVC框架
 * （3）MVC是由model（数据模型）、view（数据展示）、controller（调度中心）三个模块构成
 * （4）MVC的核心就是专人做专事，不是自己的活可以不干
 * （5）在一次HTTP请求过程中，controller负责与客户交互，controller找model来获取数据，view负责展示或格式化数据
 *
 * MVC中的控制器（controller）：
 * （1）controller（控制器）：负责跟客户打交道，包括：获取客户请求（get,post）、返回结果给客户（结果）、逻辑数据、
 * 调用model来获取出数据、调用view格式化数据，季节为“控制中心”、“调度中心”。
 * （2）model（数据模型）：负责处理数据，与MySQL直接打交道。数据的所有操作。都由model来处理，数据获取到，再交给控制器
 * （3）view（视图）：负责数据展示、格式化，主要涉及到前端技术
 * （4）MVC适合多人合作开发的项目，小项目不适合
 *
 * MVC总结：
 * （1）一个项目由若干个功能模块组成：新闻管理、学生管理、产品管理、文章管理、分类管理等
 * （2）一个功能模块只对应一个控制器，例如：NewsController、StudentController、ProductController
 * （3）一个控制器，只对应一个数据模型类，例如：NewsModel、StudentModel、ProductModel
 * （4）一个模型类，只对应一个数据表操作，例如：news表、student表、product表
 * （5）一个控制器，可以对应多个视图文件，例如：NewsView.html、StudentView.html、ProductView.html
 */
