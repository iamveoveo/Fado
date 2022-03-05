<?php
view('layout.head');
view('layout.header');
view('home.slide');
view('department.depart_list', ["manufacture" => $manufacture]);
view('home.deal', ['prodByVou'  => $prodByVou]);
view('home.trending', [
    'tagTrend'  => $tagTrend,
    'prodByTag' => $prodByTag
]);
view('Home.suggest',[
    "bigTag"        =>$bigTag,
    "tagInBigTag"   => $tagInBigTag,
    "prodOfChildTag"=> $prodOfChildTag
]);
view('layout.footer');
?>
