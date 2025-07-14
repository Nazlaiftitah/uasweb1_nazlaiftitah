<?php

class About
{
    public function index($nama, $pekerjaan)
    {
        echo "Halo, Nama Saya $nama, saya adalah seorang $pekerjaan";
    }
    public function page()
    {
        echo "About/page";
    }
}