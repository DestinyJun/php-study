<?php
/**
 * 分页类
 */

final class Page
{
  private $curPage; // 当前页
  private $totalPage; // 总页数
  private $curPerPage = 5; // 每页显示多少条

  // 构造方法初始化
  public function __construct($curPage, $totalPage, $curPerPage)
  {
    $this->curPage = $curPage;
    $this->totalPage = $totalPage;
    $this->curPerPage = $curPerPage;
  }

  // 公共的分页方法
  public function fenye()
  {
    // 分页器html
    $pageNumString = '';
    /*****************上一页按钮*****************/
    $prev = $this->curPage-1<1?1:$this->curPage-1;
    $pageNumString .= "<li class='page-item'>
      <a class='page-link' href='02-connect-mysql.php?curPage=$prev' aria-label='Previous'>
        <span aria-hidden='true'>&laquo;</span>
      </a>
    </li>";
    /*****************分页器主体按钮*****************/
    if ($this->curPage <= $this->curPerPage) {
      $begin = 1;
      $end = $this->totalPage >= 9 ? 9 : $this->totalPage;
    }
    else {
      $end = $this->curPage + $this->curPerPage > $this->totalPage ? $this->totalPage : $this->curPage + $this->curPerPage;
      $begin = $end - 8 < 1 ? 1 : $end - 8;
    }
    for ($i = $begin; $i <= $end; $i++) {
      if ($i == $this->curPage) {
        $pageNumString .= "<li class='page-item active'><a class='page-link' href='02-connect-mysql.php?curPage=$i'>$i</a></li>";
      } else {
        $pageNumString .= "<li class='page-item'><a class='page-link' href='02-connect-mysql.php?curPage=$i'>$i</a></li>";
      }
    }
    /*****************下一页按钮*****************/
    $next = $this->curPage+1>$this->totalPage?$this->totalPage:$this->curPage+1;
    $pageNumString .= "<li class='page-item'>
      <a class='page-link' href=02-connect-mysql.php?curPage=$next' aria-label='Previous'>
        <span aria-hidden='true'>&raquo;</span>
      </a>
    </li>";
    // 输出分页html
    echo $pageNumString;
  }
}
