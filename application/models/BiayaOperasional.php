<?php
/**
 * @Author: Rizki Mufrizal <mufrizalrizki@gmail.com>
 * @Date:   2016-08-16 01:27:33
 * @Last Modified by:   Aviv Arifian D
 * @Last Modified time: 2016-08-17 20:36:38
 */

class BiayaOperasional extends CI_Model
{
    /**
     * ambil data biaya operasional
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function ambilBiayaOperasional($value = '')
    {
        $this->db->order_by("tanggal_transaksi", "desc");
        return $this->db->get('tb_biaya_operasional')->result();
    }

    /**
     * function untuk simpan biaya operasional
     * @param  [type] $biayaOperasional [description]
     * @return [type]                   [description]
     */
    public function simpanBiayaOperasional($biayaOperasional)
    {
        $this->db->insert('tb_biaya_operasional', $biayaOperasional);
    }
}
