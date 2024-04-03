<?php

$description = '<div class="entry-cv">
			<p>Jasmina Radonjić, profesor engleskog jezika.</p>
<p>Jasmina Radonjić &nbsp;rođena je 19.6.1986. u Čačku. Posle završene Gimnazije u Čačku, završila je Filološki Fakultet Univerziteta u Beogradu, odsek Engleski jezik i književnost.</p>
<p>Zaposlena je na Visokoj poslovnoj školi strukovnih studija u Beogradu od 2012. godine kao nastavnik stranog jezika – Poslovni engleski jezik i Engleski za ekonomiste.</p>
<p>Usavršavala se na mnogobrojnim kursevima u zemlji i inostranstvu.</p>
        </div>';
view("employer", ["heroTitle" => "Zaposleni", "heroImage" => "hero_employer.jpg", "description" => $description]);