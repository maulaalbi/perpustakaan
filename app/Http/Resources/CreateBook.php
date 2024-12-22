<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CreateBook
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public $isbn;
    public $judul;

    public $status;
    public $nama_peminjam;
    public $nim_peminjam;


    


    public function __construct(int $isbn ,string $judul, int $status,string $nama_peminjam,string $nim_peminjam)
    {
        $this->isbn = $isbn;
        $this->judul = $judul;
        $this->status = $status;
        $this->nama_peminjam = $nama_peminjam;
        $this->nim_peminjam = $nim_peminjam;

    }

    public static function fromArray(array $data): self
    {
        return new self(
            $data['isbn'],
            $data['judul'] ?? '',
            $data['status'] ?? '',
            $data['nama_peminjam'] ?? '',
            $data['nim_peminjam'] ?? '',
        );
    }

    public function toArray(): array
    {
        return [
            'isbn'=> $this->isbn,
            'judul' => $this->judul,
            'status' => $this->status ,
            'nama_peminjam' => $this->nama_peminjam ,
            'nim_peminjam' => $this->nim_peminjam ,

        ];
    }
}
