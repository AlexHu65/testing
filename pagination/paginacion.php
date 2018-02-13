<?php
session_start();

class Paginacion
{

    private $dbh;

    public function __construct()
    {

        try {

            $this->dbh = new PDO('mysql:host=localhost;dbname=paginacion', 'root', '');
            $this->dbh->exec("SET CHARACTER SET utf8");

        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();

            die();
        }

    }

    public function prepare($sql)
    {

        return $this->dbh->prepare($sql);

    }

    //obtenemos el número de posts totales
    public function get_all_posts()
    {
        try {

            $sql = "SELECT COUNT(*) from posts";
            $query = $this->dbh->prepare($sql);
            $query->execute();

            //si es true
            if ($query->rowCount() == 1) {

                return $query->fetchColumn();

            }

        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();

        }
    }

    //creamos los enlaces de nuestra paginación
    public function crea_links()
    {

        //html para retornar
        $html = "";

        //página actual
        $actual_pag = $_SESSION["actual"];

        //limite por página
        $limit = $_SESSION["limit"];

        //total de enlaces que existen
        $totalPag = floor($this->get_all_posts() / $limit);

        //links delante y detrás que queremos mostrar
        $pagVisibles = 2;

        if ($actual_pag <= $pagVisibles) {
            $primera_pag = 1;
        } else {
            $primera_pag = $actual_pag - $pagVisibles;
        }

        if ($actual_pag + $pagVisibles <= $totalPag) {
            $ultima_pag = $actual_pag + $pagVisibles;
        } else {
            $ultima_pag = $totalPag;
        }

        $html .= '<p>';
        $html .= ($actual_pag > 1) ?
            ' <a href="#" class="button round" onclick="paginate(0,' . $limit . ')">Primera</a>' :
            ' <a href="#" class="button round disabled">Primera</a>';
        $html .= ($actual_pag > 1) ?
            ' <a href="#" class="button round" onclick="paginate(' . (($actual_pag - 2) * $limit) . ',' . $limit . ')">Anterior</a>' :
            ' <a href="#" class="button round disabled">Anterior</a>';

        for ($i = $primera_pag; $i <= $ultima_pag + 1; $i++) {
            $z = $i;
            $html .= ($i == $actual_pag) ?
                ' <a class="button secondary round disabled" href="#">' . $i . '</a>' :
                ' <a class="button round" href="#" onclick="paginate(' . (($z - 1) * $limit) . ',' . $limit . ')">' . $i . '</a>';
        }

        $html .= ($actual_pag < $totalPag) ?
            ' <a href="#" class="button round" onclick="paginate(' . (($actual_pag) * $limit) . ',' . $limit . ')">Siguiente</a>' :
            ' <a href="#" class="button round disabled">Siguiente</a>';
        $html .= ($actual_pag < $totalPag) ?
            ' <a href="#" class="button round" onclick="paginate(' . (($totalPag) * $limit) . ',' . $limit . ')">Última</a>' :
            ' <a href="#" class="button round disabled">Última</a>';
        $html .= '</p>';

        return $html;

    }


    public function get_posts($offset = 0, $limit = 10)
    {
        if ($offset == 0) {
            $_SESSION["actual"] = 1;
        } else {
            $_SESSION["actual"] = ($offset + $limit) / $limit;
        }
        $_SESSION["limit"] = $limit;
        try {

            $sql = "SELECT * FROM posts LIMIT ?,?";
            $query = $this->dbh->prepare($sql);
            $query->bindValue(1, (int)$offset, PDO::PARAM_INT);
            $query->bindValue(2, (int)$limit, PDO::PARAM_INT);
            $query->execute();

            //si existe el usuario
            if ($query->rowCount() > 0) {

                return $query->fetchAll();

            }

        } catch (PDOException $e) {

            print "Error!: " . $e->getMessage();

        }

    }

}