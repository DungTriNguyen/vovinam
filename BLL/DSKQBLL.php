<?php
require('../DAL/connectionDatabase.php');
require('../DAL/AbstracDSKQ.php');
require('../DTO/DSKQuaDTO.php');
require('../DAL/DSKQuaDAL.php');

class DSKQBLL
{
    private $DSKQuaDAL;
    function __construct()
    {
        $this->DSKQuaDAL = new DSKQuaDAL();
    }
    // Lấy danh sách
    function getList()
    {
        $arr = $this->DSKQuaDAL->getListObj();
        $result = array();

        if (count($arr) > 0) {
            foreach ($arr as $item) {
                // Lấy dữ liệu từ đối tượng GiamKhaoDTO
                $obj = array(
                    "maChiTietKetQua" => $item->getmaChiTietKetQua(),
                    //"maMonSinh" => $item->getMaMonSinh(),
                    "hoTen" => $item->getHoTen(),
                    "maThe" => $item->getMaThe(),
                    "maCauLacBo" => $item->getMaCauLacBo(),
                    "tenCauLacBo" => $item->getTenCauLacBo(),
                    "maKhoaThi" => $item->getMaKhoaThi(),
                    "tenKhoaThi" => $item->getTenKhoaThi(),
                    "maCapDai" => $item->getMaCapDai(),
                    "tenCapDai" => $item->getTenCapDai(),
                    //"maKyThuat" => $item->getMaKyThuat(),
                    //"tenKyThuat" => $item->getTenKyThuat(),
                    //"diemDon" => $item->getdiemDon(),
                    //"diemCan" => $item->getdiemCan(),
                    //"diemSong" => $item->getdiemSong(),
                    //"diemDoi" => $item->getdiemDoi(),
                    //"diemLyThuyet" => $item->getdiemLyThuyet(),
                    //"diemTheLuc" => $item->getdiemTheLuc(),
                    "tongDiem" => $item->gettongDiem(),
                    "KetQua" => $item->getKetQua(),
                    "GiamKhaoCham" => $item->getGiamKhaoCham(),
                    "GhiChu" => $item->getGhiChu(),
                    "NgayCham" => $item->getNgayCham(),
                    //"maCTPhieuDiem" => $item->getmaCTPhieuDiem(),
                    //"maKetQuaThi" => $item->getmaKetQuaThi(),
                    "mess" => "success"
                );

                array_push($result, $obj);
            }
            return $result;
        } else {
            return array("mess" => "Failed");
        }
    }

    function getSelect()
    {
        $result = $this->DSKQuaDAL->getSelect();
        return $result;
    }

    // Tìm kiếm
    function searchDSKQ($str)
    {
        $arr = $this->DSKQuaDAL->getListObj();
        $result = array();
        if (count($arr) > 0) {
            foreach ($arr as $item) {
                $maChiTietKetQua = $item->getmaChiTietKetQua();
                //$maMonSinh = $item->getMaMonSinh();
                $hoTen = $item->getHoTen();
                $maThe = $item->getMaThe();
                $maCauLacBo = $item->getMaCauLacBo();
                $tenCauLacBo = $item->getTenCauLacBo();
                $maKhoaThi = $item->getMaKhoaThi();
                $tenKhoaThi = $item->getTenKhoaThi();
                $maCapDai = $item->getMaCapDai();
                $tenCapDai = $item->getTenCapDai();
                //$maKyThuat = $item->getMaKyThuat();
                //$tenKyThuat = $item->getTenKyThuat();
                //$diemDon = $item->getdiemDon();
                //$diemCan = $item->getdiemCan();
                //$diemSong = $item->getdiemSong();
                //$diemDoi = $item->getdiemDoi();
                //$diemLyThuyet = $item->getdiemLyThuyet();
                //$diemTheLuc = $item->getdiemTheLuc();
                $tongDiem = $item->gettongDiem();
                $KetQua = $item->getKetQua();
                $GiamKhaoCham = $item->getGiamKhaoCham();
                $GhiChu = $item->getGhiChu();
                $NgayCham = $item->getNgayCham();
                //$maCTPhieuDiem = $item->getmaCTPhieuDiem();
                //$maKetQuaThi = $item->getmaKetQuaThi();

                // Kiểm tra nếu chuỗi $str xuất hiện trong bất kỳ trường nào của đối tượng
                if (

                    strpos(mb_strtolower($hoTen, 'UTF-8'), mb_strtolower($str, 'UTF-8')) !== false
                    || strpos(mb_strtolower($maThe, 'UTF-8'), mb_strtolower($str, 'UTF-8')) !== false
                    || strpos(mb_strtolower($tenCauLacBo, 'UTF-8'), mb_strtolower($str, 'UTF-8')) !== false
                    || strpos(mb_strtolower($tenCapDai, 'UTF-8'), mb_strtolower($str, 'UTF-8')) !== false
                    || strpos(mb_strtolower($tenKhoaThi, 'UTF-8'), mb_strtolower($str, 'UTF-8')) !== false
                    || strpos(mb_strtolower($KetQua, 'UTF-8'), mb_strtolower($str, 'UTF-8')) !== false
                ) {
                    $obj = array(
                        "maChiTietKetQua" => $maChiTietKetQua,
                        //"maMonSinh" => $maMonSinh,
                        "hoTen" => $hoTen,
                        "maThe" => $maThe,
                        "maCauLacBo" => $maCauLacBo,
                        "tenCauLacBo" => $tenCauLacBo,
                        "maKhoaThi" => $maKhoaThi,
                        "tenKhoaThi" => $tenKhoaThi,
                        "maCapDai" => $maCapDai,
                        "tenCapDai" => $tenCapDai,
                        //"maKyThuat" => $maKyThuat,
                        //"tenKyThuat" => $tenKyThuat,
                        //"diemDon" => $diemDon,
                        //"diemCan" => $diemCan,
                        //"diemSong" => $diemSong,
                        //"diemDoi" => $diemDoi,
                        //"diemLyThuyet" => $diemLyThuyet,
                        //"diemTheLuc" => $diemTheLuc,
                        "tongDiem" => $tongDiem,
                        "KetQua" => $KetQua,
                        "GiamKhaoCham" => $GiamKhaoCham,
                        "GhiChu" => $GhiChu,
                        "NgayCham" => $NgayCham,
                        //"maCTPhieuDiem" => $maCTPhieuDiem,
                        //"maKetQuaThi" => $maKetQuaThi,
                        "mess" => "success"
                    );
                    array_push($result, $obj);
                }
            }
        }
        return $result;
    }
}

header('Content-Type: application/json');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $check = new DSKQBLL();

    $function = $_POST['function'] ?? '';
    // menu
    switch ($function) {
        case 'getList':
            $temp = $check->getList();
            echo json_encode($temp);
            break;
        case 'getSelect':
            $temp = $check->getSelect();
            echo json_encode($temp);
            break;
        case 'searchDSKQ':
            // Lấy dữ liệu đối tượng từ POST request
            $str = $_POST['str'];
            $temp = $check->searchDSKQ($str);
            echo json_encode($temp);
            break;
    }
}