<?php
switch ($_GET['aksi'])
{
//INTERFACE TABLE BROWSER
case "tampil";
echo '
		<table id="datatables" class="display">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID TRANSAKSI</th>
                        <th>ID MEMBER</th>
						<th>Dari Bank</th>
						<th>Bank Tujuan</th>
						<th>Nama Pemilik Rekening</th>
						<th>Jumlah Transfer</th>
						<th>Tanggal Transfer</th>
						<th>Keterangan</th>
					
                    </tr>
                </thead>
                <tbody>';
                                      
					          $sql = mysqli_query($conn,"SELECT * FROM tbl_konfirmasi ORDER BY id DESC");
					          $no = 1;
                    while ($r = mysqli_fetch_array($sql)) {
                      echo "<tr>
                            <td width=40>$no</td>
                            <td>$r[id_transaksi]</td>
                            <td>$r[id_member]</td>
							<td>$r[transfer_dari]</td>
							<td>$r[bank_tujuan]</td>
                            <td>$r[nama_pemilik]</td>
							<td>$r[jumlah_transfer]</td>
							<td>$r[tanggal_transfer]</td>";
							
                           
							echo"
                            <td>$r[keterangan]</td>
						    ";
						  
							echo "
                            </tr>";
							
                      $no++;
                    }                    
                    echo "
                </tbody>
         </table>";
break;


	}



?>
<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>