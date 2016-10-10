<?php
/**
 * Created by PhpStorm.
 * User: Charley
 * Date: 2016/10/9
 * Time: 17:59
 */

$xmlDOC = new DOMDocument();
$xmlDOC -> load("./4.test.xml");

$nodes = $xmlDOC -> documentElement;
foreach ($nodes -> childNodes AS $item){
    //nodeName 和 nodeVaule是对象的属性
    print $item->nodeName . "=" . $item->nodeValue . "<br>";
}

// #text 元素之间的空文本节点

/*
 * 在上面的实例中，您看到了每个元素之间存在空的文本节点。
 * 当 XML 生成时，它通常会在节点之间包含空白。XML DOM 解析器把它们当作普通的元素，如果您不注意它们，有时会产生问题。
 */