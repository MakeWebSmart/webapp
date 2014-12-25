<?php
use azraf\simpleapp\classes\SimpleNav as Nav;
?>
            <aside class="left-side sidebar-offcanvas">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <img src="<?=$baseUrl;?>/img/avatar3.png" class="img-circle" alt="User Image" />
                        </div>
                        <div class="pull-left info">
                            <p>Hello, <?=$uName;?></p>

                            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                        </div>
                    </div>
                    <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    
                    <?php
//                        echo Nav::widget([
//                            'options' => ['class' => 'sidebar-menu'],
//                            'items' => MenuModel::getItems('admin'),
//                        ]);
                        echo Nav::widget([
                            'options' => ['class' => 'sidebar-menu'],
                            'items' => [
                                [
                                    'label' => 'Home',
                                    'url' => ['/dashboard'],
                                    'linkOptions' => [
                                            'class'=>'active',
                                            'i_class'=>'fa fa-dashboard',
                                        ],
                                ],
                                [
                                    'label' => 'Products',
                                    'tpl'=> 'adminlte',
                                    'url' => ['product/index'],
                                    'options' => ['class' => 'treeview'],
                                    'linkOptions' => [
                                            'i_class'=>'fa fa-dashboard',
//                                            'i_class_right'=>'fa pull-right fa-angle-left'
                                        ],
                                    'items' => [
//                                        'options' => ['class' => 'treeview-menu'],
                                        ['label' => 'New Arrivals', 'url' => ['dashboard/about']],
                                        ['label' => 'Most Popular', 'url' => ['dashboard/contact']],
                                    ]
                                ],
                                [
                                    'label' => 'Dropdown',
                                    'items' => [
                                         ['label' => 'Level 1 - Dropdown A', 'url' => '#'],
                                         '<li class="divider"></li>',
                                         '<li class="dropdown-header">Dropdown Header</li>',
                                         ['label' => 'Level 1 - Dropdown B', 'url' => '#'],
                                    ],
                                ],
                            ],
                        ]);
                    ?>
                   
                </section>
                <!-- /.sidebar -->
            </aside>
			<?php
$this->registerJs("if($('.treeview .active').length > 0) {
$('.treeview .active').closest('.treeview').children('a').click();
}");
?>