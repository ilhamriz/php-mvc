<?php

class About
{
  public function index($nama = "Ilham", $pekerjaan = "Developer")
  {
    echo "Halo, saya $nama. Saya seorang $pekerjaan";
  }

  public function page()
  {
    echo "about/page";
  }
}
