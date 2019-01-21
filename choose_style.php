<?
$stylesArr = array('Default', 'Black', 'Pink', 'Green', 'Red');
if(isset($_COOKIE['theme']) && in_array($_COOKIE['theme'], $stylesArr)) {
    $style = 'CSS/' . $_COOKIE['theme'] . '.css';
} else {
    $style = 'CSS/Default.css';
}
?>
<link rel="stylesheet" href="<? echo $style; ?>">
