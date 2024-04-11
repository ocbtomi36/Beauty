<?php

/*echo "helper.php</br>";*/

/**
 * Get the base path
 * @param string
 * @return string
 */
function basePath($path = '') {
    return BASE_DIR. $path;
}
/**
 * Load a view
 * @param string $name 
 * @return void
 */
function loadView($name, $data = []){

    $viewPath = basePath("App/views/{$name}.view.php");
    
    if(file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "{$name}.view.php is not exist";
    }
}

/**
 * Load user's view
 * @param string $name 
 * @return void
 */
function loadUserView($name){

    $viewPath = basePath("views/users/{$name}.view.php");
    
    if(file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "{$name}.view.php is not exist";
    }
}

/**
 * Load a view
 * @param string $name 
 * @return void
 */
function loadPartial($name){
    $partialPath = basePath("App/views/partials/{$name}.php");
    
    if(file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "{$name}.php is not exist";
    }
}

/**
 * Inspect a value(s)
 * 
 * @param mixed $value
 * @return void 
 */
function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * 
 * @param mixed $value
 * @return void 
 */
function inspectAndDie ($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}
/**
 * Builds a string, that responsible for the print navbar.
 * @param array $menu
 * @param boolean $return_html
 * 
 * @return string 
 */

function print_menu(&$menu, $return_html = FALSE){

    $menuResultString = '';

    $menuResultString .= '<ul>';
    foreach ($menu as &$menuItem) {
        $menuResultString = $menuResultString.'<li class="parent"><a href="'.$menuItem['href'].'"'.(array_key_exists('extra',$menuItem) ? generate_attributes($menuItem['extra']): ' ').'>'.$menuItem['menuTitle'].'</a>';
        if(array_key_exists('childs',$menuItem) && !empty($menuItem['childs'])){
            print_submenu($menuItem['childs'] ,$menuResultString);
        }
        $menuResultString .='</li>';
    }
    $menuResultString .= '</ul>';

    if ($return_html) {
        return $menuResultString;
    }
    else
        print $menuResultString;

}
/**
 * Builds a string, that responsible for the print the submenu if exist.
 * @param array $menu
 * @param string $menuResultStirng
 * 
 * @return string 
 */
function print_submenu(&$menu, &$menuResultString){
    $menuResultString .= '<div class="submenu"><ul class="child">';
    $hasAchild = false;
    foreach ($menu as $menuItem) {
        $hasAchild = false;
        if(array_key_exists('childs',$menuItem) && !empty($menuItem['childs'])){
            $hasAchild = true;
        }
        $menuResultString = $menuResultString.'<li '.($hasAchild?'class="parent"': ' ').'><a href="'.$menuItem['href'].'" '. ( array_key_exists('extra',$menuItem) ? generate_attributes($menuItem['extra']): ' ').'>'.$menuItem['menuTitle'].'</a>';
        
        if ($hasAchild) {
            print_submenu($menuItem['childs'] ,$menuResultString);
        }
        
        $menuResultString .='</li>';
    }
    $menuResultString .='</ul></div>';
}
/**
 * Generate attributes if exists.
 * @param array $menu
 * @param string $menuResultStirng
 * 
 * @return string 
 */

function generate_attributes($key_value_paar){
    $tagstring ='';
    foreach ($key_value_paar as $key => $value) {
        $tagstring .= $key.'="'.$value.'" ';
    }
    return $tagstring;
}


?>