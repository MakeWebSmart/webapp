
$(document).ready(function(){
if($('.treeview .active').length > 0) {
$('.treeview .active').parent().slideToggle().closest('.treeview').addClass('active');
}
}
