<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // -------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
    public $produk = [
        'nama_produk'     => 'required',
        'gambar_produk'     => 'uploaded[gambar_produk]|mime_in[gambar_produk,image/png,image/jpeg,image/jpg]|is_image[gambar_produk]',
        'deskripsi'     => 'required',
        'harga_produk'     => 'required',
        'jumlah_produk'     => 'required',
        'status'     => 'required',
    ];

    public $produk_errors = [
        'nama_produk' => [
            'required'    => 'Nama produk wajib diisi.',
        ],
        'gambar_produk'    => [
            'uploaded' => 'Gambar Produk belum diupload.',
            'mime_in' => 'Gambar Produk harus berformat png/jpg/jpeg.',
            'is_image' => 'Gambar Produk harus berformat png/jpg/jpeg.',
        ],
        'deskripsi'    => [
            'required' => 'Deskripsi wajib diisi.',
        ],
        'harga_produk'    => [
            'required' => 'Harga produk wajib diisi.',
        ],
        'jumlah_produk'    => [
            'required' => 'Jumlah produk wajib diisi.',
        ],
        'status'    => [
            'required' => 'Status produk wajib diisi.',
        ],
    ];

    public $produk_update = [
        'nama_produk'     => 'required',
        'gambar_produk'     => 'mime_in[gambar_produk,image/png,image/jpeg,image/jpg]|is_image[gambar_produk]',
        'deskripsi'     => 'required',
        'harga_produk'     => 'required',
        'jumlah_produk'     => 'required',
        'status'     => 'required',
    ];

    public $produk_update_errors = [
        'nama_produk' => [
            'required'    => 'Nama produk wajib diisi.',
        ],
        'gambar_produk'    => [
            'uploaded' => 'Gambar Produk belum diupload.',
            'mime_in' => 'Gambar Produk harus berformat png/jpg/jpeg.',
            'is_image' => 'Gambar Produk harus berformat png/jpg/jpeg.',
        ],
        'deskripsi'    => [
            'required' => 'Deskripsi wajib diisi.',
        ],
        'harga_produk'    => [
            'required' => 'Harga produk wajib diisi.',
        ],
        'jumlah_produk'    => [
            'required' => 'Jumlah produk wajib diisi.',
        ],
        'status'    => [
            'required' => 'Status produk wajib diisi.',
        ],
    ];

    public $pengiriman = [
        'id_pengiriman' => 'required',
        'id_transaksi'     => 'required',
        'resi'     => 'required',

    ];

    public $pengiriman_errors = [

        'id_pengiriman' => [
            'required' => 'ID Pesanan wajib diisi.'
        ],

        'id_transaksi' => [
            'required'    => 'ID transaksi wajib diisi.',
        ],
        'resi'    => [
            'required' => 'Resi wajib diisi.',
        ],

    ];

    public $transaksi = [
        'tgl_transaksi'     => 'required',
        'id_transaksi'     => 'required',
        'nama_customer'     => 'required',
        'alamat'     => 'required',
        'no_hp'     => 'required',
        'nama_barang'     => 'required',
        'jumlah_barang'     => 'required',
        'total_bayar'     => 'required',

    ];
    public $transaksi_errors = [
        'id_transaksi' => [
            'required'    => 'ID pengiriman wajib diisi.',
        ],
        'nama_customer'    => [
            'required' => 'Nama Customer wajib diisi.',
        ],
        'alamat'    => [
            'required' => 'Alamat pengiriman wajib diisi.',
        ],
        'no_hp'    => [
            'required' => 'NO HP pengiriman wajib diisi.',
        ],
        'nama_barang'    => [
            'required' => 'Nama Barang wajib diisi.',
        ],
        'jumlah_barang'    => [
            'required' => 'Jumlah Barang pengiriman wajib diisi.',
        ],
        'total_bayar'    => [
            'required' => 'Total Bayar pengiriman wajib diisi.',
        ],

    ];
}
