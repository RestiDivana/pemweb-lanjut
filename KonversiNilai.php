// Nilai.php
class Nilai {
    private $partisipasi;
    private $tugas;
    private $uts;
    private $uas;

    public function __construct($partisipasi, $tugas, $uts, $uas) {
        $this->partisipasi = $partisipasi;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    public function hitungNA() {
        // Rumus perhitungan NA
        return ($this->partisipasi + $this->tugas + $this->uts + $this->uas) / 4;
    }
}

// KonversiNilai.php
class KonversiNilai {
    public static function konversi($na) {
        // Konversi nilai berdasarkan interval
        if ($na >= 85) {
            return 'A';
        } elseif ($na >= 80) {
            return 'A-';
        } elseif ($na >= 75) {
            return 'B+';
        } elseif ($na >= 70) {
            return 'B';
        } elseif ($na >= 65) {
            return 'B-';
        } elseif ($na >= 60) {
            return 'C+';
        } elseif ($na >= 55) {
            return 'C';
        } elseif ($na >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }
}