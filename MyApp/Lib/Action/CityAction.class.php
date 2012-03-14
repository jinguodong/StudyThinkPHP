<?php

class CityAction extends Action{
    public function _empty($name) {
        header("Content-Type:text/html; charset=utf-8");
        $this->city($name);
    }
    protected function city($name) {
        echo "您输入的城市名称：".$name;
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
