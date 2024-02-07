@extends('layouts.user_type.auth')

@section('title', 'Kalkulator')

@section('content')
<!--
ini untuk set tanggal -->
<?php
$date1 = $kalkulator->date;
$ubahDate1 = date('d-m-Y', strtotime($date1 . ' + 1 days'))
?>

<div class="table-container">
    <div class="card-title">
        <h1 class="table-title">SOP Pertanian Bawang Merah</h1>
    </div>
    <table class="w-full text-sm text-left text-gray-800">
        <thead class="text-1x1 text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="py-3 px-6 tanggal-pelaksanaan">Tanggal Pelaksanaan</th>

                <th scope="col" class="py-3 px-6">Aktivitas</th>
                <th scope="col" class="py-3 px-6">Item</th>
                <th scope="col" class="py-3 px-5 status-column">Status</th>

               
            </tr>
        </thead>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo $ubahDate1; ?> - <?php echo date(
                                                                                                                                                        'd-m-Y',
                                                                                                                                                        strtotime($ubahDate1 . ' + 2 days')
                                                                                                                                                    ); ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Persiapan Lahan </td>
                <td class="py-4 px-6">Traktor (Bajak)</td>



              <td><x-checkbox-form :checkboxId="'checkbox1'" /></td>

            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 3 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Raker)</td>

                <td><x-checkbox-form :checkboxId="'checkbox2'" /></td>

            </tr>

            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 4 days')
                                                                                                                    ); ?> - <?php echo date(
                                                                                                                                'd-m-Y',
                                                                                                                                strtotime($ubahDate1 . ' + 5 days')
                                                                                                                            ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Rotary)</td>
                <td><x-checkbox-form :checkboxId="'checkbox3'" /></td>
            </tr>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"> <?php echo date(
                                                                                                                            'd-m-Y',
                                                                                                                            strtotime($ubahDate1 . ' + 6 days')
                                                                                                                        ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Traktor (Bedding)</td>
                <td><x-checkbox-form :checkboxId="'checkbox4'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 7 days')
                                                                                                                    ); ?></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Penanaman </td>
                <td class="py-4 px-6">Benih (Shallot)</td>
                <td><x-checkbox-form :checkboxId="'checkbox5'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 7 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemotongan Benih</td>
                <td><x-checkbox-form :checkboxId="'checkbox6'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"><?php echo date(
                                                                                                                        'd-m-Y',
                                                                                                                        strtotime($ubahDate1 . ' + 11 days')
                                                                                                                    ); ?>
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Beejamruth (untuk benih)</td>
                <td><x-checkbox-form :checkboxId="'checkbox7'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga kerja untuk Beejamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox8'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Penanaman</td>
                <td><x-checkbox-form :checkboxId="'checkbox9'" /></td>
            </tr>

        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;"></td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Dasar </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Ghana Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox10'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Ghana Jeevamruth (Padat)</td>
                <td><x-checkbox-form :checkboxId="'checkbox11'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox12'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 18 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox13'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox14'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox16'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 20 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox17'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox18'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox19'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 21 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox20'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox21'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox22'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 24 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida </td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox23'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox24'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox25'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 26 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox26'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox27'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox28'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 28 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox29'" /></td>
            </tr>

            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox30'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox31'" /></td>
            </tr>
        </tbody>


        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 30 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan(Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox32'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 31 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox33'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox34'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox35'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 33 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox36'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox37'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox38'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 35 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox39'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox40'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox41'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 38 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox42'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox43'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox44'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 40 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox45'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox46'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox47'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 42 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox48'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox49'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox50'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 45 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox51'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox52'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox53'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 47 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox54'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox55'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox56'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 49 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox57'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox58'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox59'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 52 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox60'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox61'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox62'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 54 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox63'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox64'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox65'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 56 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox66'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox67'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox68'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 59 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Tambahan</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan(Ghana)</td>
                <td><x-checkbox-form :checkboxId="'checkbox69'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 60 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox70'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox71'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox72'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 62 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox73'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox74'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox75'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 64 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox76'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox77'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox78'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 67 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox79'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox80'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox81'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 69 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox82'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox83'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox84'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 71 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox85'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox86'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox87'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 74 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox88'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox89'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox90'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 76 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox91'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox92'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox93'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 78 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox94'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox95'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox96'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 81 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox97'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox98'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox99'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 83 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox100'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox101'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox102'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 85 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox103'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox104'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox105'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 88 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox106'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Neemastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox107'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox108'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 90 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pemupukan Rutin</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox109'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Drava Jeevamruth</td>
                <td><x-checkbox-form :checkboxId="'checkbox110'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pemupukan</td>
                <td><x-checkbox-form :checkboxId="'checkbox111'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 92 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Pestisida</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Membuat Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox112'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Brahmastram</td>
                <td><x-checkbox-form :checkboxId="'checkbox113'" /></td>
            </tr>
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 16px;">
                </td>
                <td class="py-4 px-6"></td>
                <td class="py-4 px-6">Tenaga Kerja untuk Pestisida</td>
                <td><x-checkbox-form :checkboxId="'checkbox114'" /></td>
            </tr>
        </tbody>

        <tbody class="bg-white">
            <tr class="border-b">
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">
                    <?php echo date(
                        'd-m-Y',
                        strtotime($ubahDate1 . ' + 98 days')
                    ); ?>
                </td>
                <td class="text-1x1 text-gray-700 uppercase bg-gray-50" style="font-weight: bold; font-size: 12px;">Panen</td>
                <td class="py-4 px-6">Tenaga Kerja untuk Panen</td>
                <td><x-checkbox-form :checkboxId="'checkbox115'" /></td>
            </tr>
        </tbody>

    </table>
</div>
</div>

</body>
<style>
    .table-container {
        overflow-x: auto;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        text-align: left;
        color: #333;
    }

    thead {
        background-color: #EEE;
    }

    th,
    td {
        padding: 10px;
        border: 1px solid #CCC;
    }

    tbody tr:nth-child(odd) {
        background-color: #FFF;
    }

    tbody tr:nth-child(even) {
        background-color: #F9F9F9;
    }

    th {
        font-weight: bold;
    }

    input[type="checkbox"] {
        /* Style as needed */
    }

    .card-title {
        background-color: #333;
        /* Dark grey background */
        border-radius: 8px;
        /* Rounded corners */
        padding: 15px;
        /* Spacing inside the card */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        /* Slightly darker shadow for depth */
        margin-bottom: 20px;
        /* Space below the card */
        text-align: center;
        /* Center the title */
    }

    .table-title {
        margin: 0;
        /* Remove default margin */
        font-size: 24px;
        /* Large font size for the title */
        color: #fff;
        /* Light text color for contrast */
    }

    th.tanggal-pelaksanaan {
        width: 30%;
        /* Atau nilai spesifik lain sesuai kebutuhan */
    }
</style>
@endsection
