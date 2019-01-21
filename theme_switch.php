<?
$stylesArr = array('Default', 'Black', 'Pink', 'Green', 'Red');
if(isset($_POST['theme']) && in_array($_POST['theme'], $stylesArr)) {
    $style = $_POST['theme'];
    setcookie("theme", $style, time()+(60*60*24*30));
}

header("Location: choose_style.php"); # this will reload your theme selector
exit(); # this will make sure the cookie gets loaded next time.

?>
