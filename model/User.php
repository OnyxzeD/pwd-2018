<?php
require_once 'model/Services.php';
require_once 'model/General.php';

class User
{
    private $services = NULL;
    private $general = NULL;
    private $conn;

    public function __construct()
    {
        $this->services = new Services();
        $this->general = new General();
        $this->conn = $this->services->openDb();
    }

    public function findUser($id)
    {
        try {
            $res = $this->general->selectBy("user", "*", "status = '$id'");
            $this->services->closeDb($this->conn);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function get()
    {
        try {
            $res = $this->general->selectAll("user");
            $this->services->closeDb($this->conn);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function create($value)
    {
        try {
            $id = $this->general->generateId('id', 'user', 'US');
            array_unshift($value, $id);
            $column = ['id', 'username', 'password', 'email', 'level', 'status'];
            $res = $this->general->insert('user', $column, $value);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function update($id, $column, $value)
    {
        try {
            $res = $this->general->update('user', $column, $value, $id);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    public function delete($id)
    {
        try {
            $res = $this->general->delete('user', $id);

            return $res;
        } catch (Exception $e) {
            $this->services->closeDb($this->conn);
            throw $e;
        }
    }

    private function validateNewsParams($author, $cat)
    {
        $errors = array();
        if (!isset($author) || empty($author)) {
            $errors[] = 'Author is required';
        } else {
            //validation exist
            $rep = $this->reporter->getRepById($author);
            if (empty($rep)) {
                $errors[] = 'Reporter Not Found';
            }
        }

        if (!isset($cat) || empty($cat)) {
            $errors[] = 'Category is required';
        } else {
            //validation exist
            $rep = $this->categories->getCatById($cat);
            if (empty($rep)) {
                $errors[] = 'Category Not Found';
            }
        }

        if (empty($errors)) {
            return;
        }
        throw new ValidationException($errors);
    }

    /**
     ** gateway lane
     ** =========================================================================
     */
    private function _selectAll($order)
    {
        if (!isset($order)) {
            $order = "name";
        }
        $dbOrder = mysql_real_escape_string($order);
        $dbres = mysql_query("SELECT n.*,c.name as 'category_name',c.id as 'cat_id',r.nama as 'author_name' FROM news n 
        join reporter r on r.id = n.author_id
        join news_categories nc on nc.news_id = n.id
        join categories c on c.id = nc.cat_id where n.status = 1 ORDER BY $dbOrder ASC");

        $News = array();
        while (($obj = mysql_fetch_object($dbres)) != NULL) {
            $News[] = $obj;
        }

        return $News;
    }

    private function _selectById($id)
    {
        $q = "SELECT * FROM students WHERE id = $id";
        $sql = mysqli_query($this->conn, $q);

        return $sql;

    }

    private function _insert($author, $title, $content)
    {

        $dbAuthor = ($author != NULL) ? "'" . mysql_real_escape_string($author) . "'" : 'NULL';
        $dbTitle = ($title != NULL) ? "'" . mysql_real_escape_string($title) . "'" : 'NULL';
        $dbContent = ($content != NULL) ? "'" . mysql_real_escape_string($content) . "'" : 'NULL';

        mysql_query("INSERT INTO news (author_id, title, content,status,created_at, updated_at) VALUES ($dbAuthor,$dbTitle,$dbContent, 1, date(now()), null)");

        return mysql_insert_id();
    }

    private function _insert_cat($catId, $newsId)
    {

        $dbCat = ($catId != NULL) ? "'" . mysql_real_escape_string($catId) . "'" : 'NULL';
        $dbNews = ($newsId != NULL) ? "'" . mysql_real_escape_string($newsId) . "'" : 'NULL';

        mysql_query("INSERT INTO news_categories (news_id, cat_id,updated_at) VALUES ($dbNews,$dbCat,null)");

        return mysql_insert_id();
    }

    private function _update($id, $author, $title, $content)
    {

        $dbAuthor = ($author != NULL) ? "'" . mysql_real_escape_string($author) . "'" : 'NULL';
        $dbTitle = ($title != NULL) ? "'" . mysql_real_escape_string($title) . "'" : 'NULL';
        $dbContent = ($content != NULL) ? "'" . mysql_real_escape_string($content) . "'" : 'NULL';

        mysql_query("update news set author_id = $dbAuthor,title = $dbTitle,content = $dbContent, updated_at = date(now()) where id = $id");
    }

    private function _update_cat($catId, $newsId, $oldCat)
    {

        $dbCat = ($catId != NULL) ? "'" . mysql_real_escape_string($catId) . "'" : 'NULL';
        $dbNews = ($newsId != NULL) ? "'" . mysql_real_escape_string($newsId) . "'" : 'NULL';
        $dbOldCat = ($oldCat != NULL) ? "'" . mysql_real_escape_string($oldCat) . "'" : 'NULL';

        mysql_query("update news_categories set cat_id = $dbCat ,updated_at = date(now()) where cat_id = $dbOldCat and news_id = $dbNews");

    }

    public function _delete($id)
    {
        $dbId = mysql_real_escape_string($id);
        mysql_query("update news set status = 0, updated_at = date(now()) where id = $id");
    }

}

?>
