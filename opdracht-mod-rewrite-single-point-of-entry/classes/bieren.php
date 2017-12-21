<?php

    class Bieren
    {
        public function Overview($table, $id)
		{
			echo '<h1>Overview van ' . $table . '</h1>';
        }

        public function Insert($table)
		{
			echo '<h1>Insert in ' . $table . '</h1>';
        }
        
        public function Delete($table, $id)
		{
			echo '<h1>Delete van ' . $table . '</h1>';
		}

        public function Update($table, $id)
		{
			echo '<h1>Update van ' . $table . '</h1>';
		}
    }

?>