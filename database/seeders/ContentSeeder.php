<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Header
        DB::table('headers')->insert([
            'title' => 'Unggul Dan Religi',
            'content' => 'Berprestasi Berakhlak',
            'img' => '["hero-img.png"]',
            'active' => 1
        ]);

        // Sambutan
        DB::table('sambutans')->insert(
            [
            'title' => 'Kepala Sekolah',
            'content' => 'Sebagai lembaga pendidikan. SD Negeri 1 Teluk tanggap dengan perkembangan teknologi tersebut. Dengan dukungan SDM yang di milikisekolah ini siap untuk berkompetisidengan sekolah lain dalam pelayanan informasi publik. Teknologi informasi Web khususnya, menjadi sarana bagi SD Negeri 1 Teluk untuk memberi pelayanan informasi secara cepat dan jelas. Dari layanan ini pula, Sekolah siap menerima saran dari semua pihak yang akhirnya dapat menjawab kebutuhan masyarakat. Terima kasih telah berkunjung ke website kami',
            'img' => '["kepsek.png"]',
            'active' => 1
            ]
        );

        // Total Guru
        $totalguru = [
            [
                'title' => 'Total Guru',
                'content' => '15',
                'img' => '["guru-icon.png"]',
                'active' => 1
            ],
            [
                'title' => 'Total Karyawan',
                'content' => '2',
                'img' => '["karyawan-icon.png"]',
                'active' => 1
            ],
            [
                'title' => 'Total Siswa',
                'content' => '100',
                'img' => '["siswa-icon.png"]',
                'active' => 1
            ],
        ];
        DB::table('total_gurus')->insert($totalguru);

        // Ekstra
        DB::table('ekstras')->insert([
            [
                'title' => 'Seni Tari',
                'content' => '1',
                'img' => '["senitari.png"]',
                'active' => 1
            ],
            [
                'title' => 'Pidato',
                'content' => '2',
                'img' => '["pidato.png"]',
                'active' => 1
            ],
            [
                'title' => 'Seni Lukis',
                'content' => '1',
                'img' => '["lukis.png"]',
                'active' => 1
            ],
            [
                'title' => 'Pantonim',
                'content' => '1',
                'img' => '["pantonim.png"]',
                'active' => 1
            ],
            [
                'title' => 'Macapat',
                'content' => '2',
                'img' => '["macapat.png"]',
                'active' => 1
            ],
            [
                'title' => 'Pramuka',
                'content' => '100',
                'img' => '["pramuka.png"]',
                'active' => 1
            ],
            [
                'title' => 'Atletik',
                'content' => '1',
                'img' => '["Atletik.png"]',
                'active' => 1
            ],
            [
                'title' => 'Kenthongan',
                'content' => '2',
                'img' => '["Kenthongan.png"]',
                'active' => 1
            ],
            [
                'title' => 'Hadroh',
                'content' => '100',
                'img' => '["hadroh.png"]',
                'active' => 1
            ],
            [
                'title' => 'Cipta Baca Puisi',
                'content' => '1',
                'img' => '["puisi.png"]',
                'active' => 1
            ],
            [
                'title' => 'BTQ',
                'content' => '2',
                'img' => '["btq.png"]',
                'active' => 1
            ],
            [
                'title' => 'Pelatihan Komputer',
                'content' => '100',
                'img' => '["komputer.png"]',
                'active' => 1
            ],
        ]
        );

        // Prestasi
        DB::table('prestasis')->insert([
            [
                'title' => 'Juara 2 Festival Ketrampilan PramukaSiaga Inovatif Tingkat KaB. Banyumas',
                'content' => '15',
                'img' => '["trophy.png"]',
                'active' => 1
            ],
            [
                'title' => 'JUARA 1 LOMBA OSNG TINGKAT KABUPATEN',
                'content' => '2',
                'img' => '["trophy.png"]',
                'active' => 1
            ],
            [
                'title' => 'Juara 2 Seni Tari tingkat kecamatan',
                'content' => '100',
                'img' => '["trophy.png"]',
                'active' => 1
            ],
        ]
        );

        // Berita
        DB::table('content_beritas')->insert([
            [
                'title' => 'PEMANFAATAN BANTUAN TIK UNTUK KEGIATAN ASESMEN',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo',
                'img' => '["pemanfaatan.png"]',
                'active' => 1
            ],
            [
                'title' => 'KEGIATAN PEMBIASAAN MENYAMBUT SISWA',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo',
                'img' => '["sambutsiswa.png"]',
                'active' => 1
            ],
            [
                'title' => 'MENERIMA DAK TIK rp 220.000.000,-',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo',
                'img' => '["daktik.png"]',
                'active' => 1
            ],
            [
                'title' => 'PEMANFAATAN BANTUAN TIK UNTUK KEGIATAN ASESMEN',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo',
                'img' => '["pemanfaatan.png"]',
                'active' => 1
            ],
            [
                'title' => 'KEGIATAN PEMBIASAAN MENYAMBUT SISWA',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo',
                'img' => '["sambutsiswa.png"]',
                'active' => 1
            ],
            [
                'title' => 'MENERIMA DAK TIK rp 220.000.000,-',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit.

                In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ullamcorper nisl id nisl. In turpis pretium orci orci. Enim sit varius sem amet, nunc pharetra quam volutpat non. Mi habitant gravida non leo',
                'img' => '["daktik.png"]',
                'active' => 1
            ],
        ]
        );

        // visi misi
        DB::table('visidan_misis')->insert([
            [
                'title' => 'Indikator Visi',
                'content' => '1. Unggul dalam prestasi akademik dan non akademik\s
                2. Unggul dalam budi pekerti\s
                3. Unggul dalam Iman Taqwa (IMTAQ) dan IPTEK (Ilmu Pengetahuan dan Teknologi)\s
                4. Unggul dalam nasionalisme.\s',
                'img' => '["trophy.png"]',
                'active' => 1
            ],
            [
                'title' => 'Program Kerja SD N 1 Teluk',
                'content' => '1. Meningkatkan prestasi akademik dan non akademik agar mampu bersaing diera globalisasi di masa pandemi Covid-19.\s
                2. Penerapan kurikulum 2013.\s
                3. Menerapkan 18 pendidikan karakter.\s
                4. Menerapkan rasa nasionalisme dan cinta tanah air.\s
                5. Dibidang sarpras pembangunan talud ,tembok keliling, pengajuan ruang laboratorium TIK, dan perbaikan tempat parkir.\s
                6. Pembinaan kegiatan ekstrakulikuler secara virtual dan luring.\s
                7. Kegiatan pembelajaran secara tatap muka dan daring.\s
                8. Persiapan sarana prasarana mendukung kegiatan tatap muka bagi siswa kelas 1-6.\s
                9. Mengadakan kerja sama ( MOU ) dengan instansi lain yang mendukung pendidikan di SD.\s
                10. Kegiatan pelatihan komputer bagi kelas 4-6.\s',
                'img' => '["trophy.png"]',
                'active' => 1
            ],
        ]
        );

        // Guru dan Karyawan
        DB::table('gurudankaryawans')->insert([
            [
                'title' => 'Guru Kelas 1A & 1B',
                'content' => 'Sulistiya ningsih,S.Pd
                Rumiasih,S.Pd.SD',
                'img' => '["kelas 1.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Kelas 2A & 2B',
                'content' => 'Nur Laeli Hidayah,S.Pd
                Afifah Hasna Prilia,S.Pd.SD',
                'img' => '["Kelas 2.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Kelas 3A & 3B',
                'content' => 'Ratna Dwihastuti,S.Pd
                Bayu Rizky Aditya,S.Pd',
                'img' => '["Kelas 3.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Kelas 4A & 4B',
                'content' => 'Sumirah,S.Pd.SD
                Artini,S.Pd.SD (Kusmaenik,S.Pd)',
                'img' => '["Kelas 4.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Kelas 5A & 5B',
                'content' => 'Retno Prabaningrum,S.Pd.SD
                Dian Suhestina,S.Pd',
                'img' => '["Kelas 5.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Kelas 6A & 6B',
                'content' => 'Mohammad Januar,S.Pd.SD
                Novi Setyaningsih,S.Pd',
                'img' => '["Kelas 6.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Pend. Agama Islam',
                'content' => 'Kusmiati,S.Ag',
                'img' => '["Guru Agama Islam.png"]',
                'active' => 1
            ],
            [
                'title' => 'Guru Penjasorkes',
                'content' => 'Sukanto,S.Pd
                Antika Sri Jatmika,S.Pd.SD',
                'img' => '["Guru Penjasorkes.png"]',
                'active' => 1
            ],
            [
                'title' => 'Tenaga Admin',
                'content' => 'Chotijah',
                'img' => '["Tenaga Admin.png"]',
                'active' => 1
            ],
            [
                'title' => 'Penjaga Sekolah',
                'content' => 'Apriyanto',
                'img' => '["Penjaga Sekolah.png"]',
                'active' => 1
            ],
        ]
        );

        // Perpustakaan
        DB::table('perpustakaans')->insert(
            [
                'title' => 'Perpustakaan',
                'content' => 'Perpustakaan SD N 1 Teluk diharapkan menjadi sumber belajar warga sekolah yang dalam pelayanannya tidak hanya menyediakan bahan pustaka pendukung kurikulum pendidikan, namun bahan bacaan ringan. Perpustakaan SD N 1 Teluk senantiasa berbenah untuk mengoptimalkan perannya dalam mendukung kegiatan belajar mengajar serta untuk dapat melayani dengan prima dan mengembangkan serta meningkatkan literasi warga sekolah yang gemar membaca.',
                'img' => '["perpustakaan.png"]',
                'active' => 1
            ],
        );

        // Ruang Guru
        DB::table('ruang_gurus')->insert(
            [
                'title' => 'Ruang Guru',
                'content' => 'Ruang guru merupakan tempat berkumpulnya para guru selagi istirahat ataupun sedang mengerjakan tugasnya selain mengajar di kelas ruang guru juga tempat para siswa siswa melakukan komunikasi ketika ada sesuatu masalah kepada para guru guru di ruang guru banyak terdapat fasilitas fasilitas yang di gunakan untuk mengajar banyak juga biasanya ada berbagi penghargaan dari lomba lomba akademik ataupun non akademik yang berjejer menghiasi ruang guru di ruang guru juga digunakan sebagai ruangan rapat ataupun membahas tentang sekolah bersama-sama semua guru. Ruang guru di setiap sekolah berbeda-beda. Ada yang kecil, ada yang besar. Ada yang sederhana, ada yang mewah dan dilengkapi interior yang mahal.',
                'img' => '["ruangguru.png"]',
                'active' => 1
            ],
        );

        // Mushola
        DB::table('musholas')->insert(
            [
                'title' => 'Mushola',
                'content' => 'SD Negri 1 Teluk juga menyediakan mushola sebagai sarana ibadah untuk para siswa/i dan guru-guru SD Negri 1 Teluk yang bergama Islam, biasanya dipergunakan untuk shlat dhuha berjamaah begitu pula dengan shalat wajib berjamaah, karena berada di dalam sekolah, musholah ini diperuntukan bagi siswa/i, guru-guru dan orang-orang yang berkepentingan saja di SD Negri 1 Teluk ini.',
                'img' => '["mushola.png"]',
                'active' => 1
            ],
        );

        // Kantin
        DB::table('kantins')->insert(
            [
                'title' => 'Kantin',
                'content' => 'Fasilitas kantin sekolah di SD Negeri 1 Teluk menyediakan makanan pilihan atau sehat untuk siswa yang dilayani oleh petugas kantin. menyedikan makanan pilihan yang diizinkan oleh sekolah. Disinilah peran sekolah dalam mengatur dan memanajemen kantin sehingga kantin sekolah tidak hanya sebatas fisik saja. Keberadaan kantin di sekolah, tidak hanya sekedar untuk memenuhi kebutuhan makan dan minum siswa semata, namun juga dapat dijadikan sebagai wahana untuk mendidik siswa tentang kesehatan, kebersihan, kejujuran, saling menghargai, disiplin dan nilai-nilai lainnya.',
                'img' => '["kantin.jpg"]',
                'active' => 1
            ],
        );

        // Ruang Lab
        DB::table('ruang_labs')->insert(
            [
                'title' => 'Laboratorium',
                'content' => 'Laboratorium komputer adalah tempat riset ilmiah, eksperimen, pengukuran ataupun pelatihan ilmiah yang berhubungan dengan ilmu komputer dan memiliki beberapa komputer dalam satu jaringan untuk penggunaan oleh kalangan tertentu. Berbeda dengan warung internet yang dalam penggunaannya lebih ditujukan untuk umum, lab komputer biasa dijumpai di sekolah-sekolah, perkantoran, dan badan peneliti ilmiah. Lab komputer juga umumnya memiliki perangkat tambahan seperti pencetak dan pemindai untuk menunjang kebutuhan.',
                'img' => '["laborat.jpg"]',
                'active' => 1
            ],
        );

        // Galeri Foto
        DB::table('galeri_fotos')->insert([
            [
                'title' => 'Foto Bersama Para Guru',
                'content' => '1',
                'img' => '["guru.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Piket Pagi Siswa',
                'content' => '1',
                'img' => '["piket_pagi.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Jalan Sehat',
                'content' => '1',
                'img' => '["jalan.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Penyambutan Siswa',
                'content' => '1',
                'img' => '["penyambutan_siswa.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Piala Yang Diperoleh',
                'content' => '1',
                'img' => '["piala.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Situasi UNBK ',
                'content' => '1',
                'img' => '["unbk.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Sholat Berjamaah',
                'content' => '1',
                'img' => '["sholeat.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Senam Pagi Bersama',
                'content' => '1',
                'img' => '["senam.jpg"]',
                'active' => 1
            ],
            [
                'title' => 'Upacara Bendera',
                'content' => '1',
                'img' => '["upacara.jpg"]',
                'active' => 1
            ],
        ]
        );

        // Ruang Lab
        DB::table('galeri_videos')->insert(
        [
            [
                'content' => 'https://www.youtube.com/embed/k17_6oomerU',
                'active' => 1
            ],
            [
                'content' => 'https://www.youtube.com/embed/90yNRhgmU7o',
                'active' => 1
            ],
            [
                'content' => 'https://www.youtube.com/embed/8HvmyctuGRM',
                'active' => 1
            ],
        ]
        );

        // Configuration
        DB::table('configurations')->insert(
            [
                'nama' => 'pendaftaran',
                'active' => 1
            ],
        );

        // Kantin
        DB::table('kelas')->insert([
            [
                'nama' => '1',
                'active' => 1
            ],
            [
                'nama' => '2',
                'active' => 1
            ],
            [
                'nama' => '3',
                'active' => 1
            ],
            [
                'nama' => '4',
                'active' => 1
            ],
            [
                'nama' => '5',
                'active' => 1
            ],
            [
                'nama' => '6',
                'active' => 1
            ],
        ]
        );

        // Kontak
        DB::table('kontaks')->insert(
            [
                [
                    'title' => 'Kontak',
                    'alamat' => 'HOS Notosuwiryo, Purwokerto Selatan, Kruwet, Teluk, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53145',
                    'email' => 'Support@Figma.com',
                    'hp' => '+62281624540',
                    'active' => 1
                ],
            ]
            );
    }
}
