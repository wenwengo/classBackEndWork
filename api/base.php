
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<?php
//    session_start();       //啟用session功能
   date_default_timezone_set("Asia/Taipei");   //設定網站的時區為亞洲台北

    /* 自訂函式 dd($array) ，用來顯示陣列內容-除錯時使用 */
    function dd($array)
    {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }


// 此處亦可直接指定資料表名 class p_portfolios{ 的方式
class DB
{
    protected $table;  // 用於儲存資料表名稱
    protected $dsn ="mysql:host=localhost;charset=utf8;dbname=s1130101";  // 資料庫連線字串  （dbname為資料庫名 此處應根據實際情況設置）
    protected $pdo;  // 用於儲存 PDO 物件
    protected $username='root';  // 資料庫用戶帳號 （此處應根據實際情況設置）
    protected $password='';  // 資料庫用戶密碼（此處應根據實際情況設置）

    // 建構子，初始化資料庫連線
    public function __construct($table)
    {
        $this->table = $table;  // 將表名賦值給類別的成員變量
        $this->pdo = new PDO($this->dsn, $this->username, $this->password);  // 使用 PDO 連接資料庫
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  // 設定 PDO 錯誤模式為異常模式
    }

    // 取得所有作品集資料的方法
    public function getAllPortfolios()
    {
        $stmt = $this->pdo->prepare("SELECT * FROM {$this->table}");  // 準備 SQL 語句
        $stmt->execute();  // 執行 SQL 語句
        return $stmt->fetchAll(PDO::FETCH_OBJ);  // 以物件形式返回所有查詢結果
    }
}

// ↓首字請大字以利分判，創建 DB 類別的實例並指定資料表名稱（資料表/變數名稱 此處應根據實際情況設置）  此列可在欲進行inclued_one '本頁相對網址'; 的該網頁再new
// $P_portfolio = new DB('p_portfolios');  //圖片作品集的 DB table

/* 
// 呼叫 getAllPortfolios 方法取得所有資料，到該網頁使用
$portfolios = [];
$portfolios = $P_portfolio->getAllPortfolios();
 */ 

$P_carousels = new DB('p_carousels');  
$P_portfolios = new DB('p_portfolios');  

?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>