<?php
/*-------------------------------------------------------
*
*   kEditComment.
*   Copyright © 2012 Alexei Lukin
*
*--------------------------------------------------------
*
*   Official site: http://kerbystudio.ru
*   Contact e-mail: kerby@kerbystudio.ru
*
---------------------------------------------------------
*/


$config=array();

// Проверять ли возможность редактирования комментирования при формировании дерева комментариев
// Битовая маска, для значений смотрите модуль ACL
$config['template_check_edit_rights']=1;//PHP_INT_MAX;

// Показывать ли кнопку истории редактирования комментария.
// 0 - не показывать никому
// 1 - показывать всем
// 2 - показывать только списку редакторов
// 3 - показывать только админу
$config['show_history_button']=1;

// Показывать ли кнопку отмены редактирования комментария. Можно использовать для "экономии" места под кнопки
$config['show_cancel_button']=true;

// Массив ID пользователей, которым разрешается редактировать свои и чужие комментарии без учета остальных ограничений  
$config['comment_editors']=array();

// Минимальный рейтинг пользователя, при котором разрешается редактировать комментарии
$config['min_user_rating']=0;

// Максимальная длина комментария при редактировании
$config['max_comment_length']=10000;

// Максимальная глубина сохранения истории редактирований. 0 - неограниченное количество хранящихся редакций, 1 - единственное последние редактирование. 
$config['max_history_depth']=0;

// Максимальное число редактирований комментария, 0 - неограниченое количество
$config['max_edit_count']=5;

// Максимальное время (в секундах), в течении которого можно отредактировать комментарий. 0 - без ограничений времени
$config['max_edit_period']=2*60;

// Запрещять ли редактировать комментарии, у которых есть ответы?
$config['deny_with_answers']=true;
 
// Добавлять ли к отредактированному комментарию информацию о дате последнего редактирования? 
// ВНИМАНИЕ: применяется только к комментариям, отредактированным после того, как была включена эта опция
$config['add_edit_date']=false;

// Менять ли дату добавления комментария на текущую при редактировании коммента и обновлять ли прямой эфик комментов  
$config['change_online']=true;

// Я подтверждаю, что хочу убрать ссылку на спонсора и, как честный человек, сделал пожертвование по ссылке http://livestreetcms.ru/profile/kerby/donate/ 
// code is open, isnt it?
$config['donated']=true;

return $config;
?>
