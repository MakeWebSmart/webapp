<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\models;
/**
 * Description of SuperAdminMainMenu
 *
 * @author User pc
 */
class MenuModel {//+++++++++++++++++
    
    
    public function getItems($role=false)
    {
        switch ($role)
        {
            case 'admin':
            $items = SELF::_itemsAdmin();
            break;
            case 'operator':
            
            $items = SELF::_itemsOperator();
            break;
            
            default:
            $items = SELF::_itemsGuest();
        }
        
        return $items;
    }
    
    private function _itemsAdmin()
    {
        return [
            [
                'label' => 'Home',
                'url' => ['site/index'],
                'linkOptions' => [
                        'i_class'=>'fa fa-dashboard',
                        'i_class_right'=>'fa fa-angle-left pull-right'
                    ],
            ],
            [
                'label' => 'Charts',
                'url' => ['site/index'],
                'options'=>['class'=>'treeview',],
                'linkOptions' => [
                        'i_class'=>'fa fa-dashboard',
                        'i_class_right'=>'fa fa-angle-left pull-right'
                    ],
            ],
            [
                'label' => 'Elements',
                'url' => ['site/index'],
                'linkOptions' => [
                        'i_class'=>'fa fa-dashboard',
                        'i_class_right'=>'fa fa-angle-left pull-right'
                    ],
            ],
        ];
    }
    
    private function _itemsOperator()
    {
        return [
            
        ];
    }
    
    private function _itemsGuest()
    {
        return [
            
        ];
    }
}

