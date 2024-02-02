<?php function navLink($link, $text) {
  
  return
    '<li class="nav-item h-75 d-flex align-items-end ">
      <a class="nav-link text-light  fs-xx   pt-2 mx-1  " aria-current="page" href="' . $link . '" target="_blank">' . $text . '</a>
    </li>';
}

?>