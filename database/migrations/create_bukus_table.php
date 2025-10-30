<?php
public function up(): void
{
    Schema::create('bukus', function (Blueprint $table) {
        $table->id();
        $table->string('judul');
        $table->string('penulis');
        $table->string('penerbit');
        $table->year('tahun_terbit');
        $table->integer('jumlah');
        $table->timestamps();
    });
}
