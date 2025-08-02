<?= $this->extend('layout/32602300067_Ayyasy') ?>
<?= $this->section('content') ?>

<div class="banner">
    <h1 class="name">AYYASY ABDUL AZIZ</h1>
    <p class="description">Mahasiswa Fakultas Teknologi Industri, Jurusan Teknik Informatika</p>
</div>

<div class="about">
    <div class="container" style="display: flex; justify-content: space-between; flex-wrap: wrap;">
        <!-- Left Column - About -->
        <div style="flex: 1; min-width: 300px; padding-right: 20px;">
            <h3>About Me</h3>
            <p>
                An undergraduate student at the Faculty of Industrial Technology, majoring in Informatics Engineering from the Islamic University of Sultan Agung Semarang.
            </p>
        </div>

        <!-- Right Column - Experience -->
        <div style="flex: 1; min-width: 300px;">
            <h3>Experience</h3>
            <table border="1" cellspacing="0" cellpadding="10" style="width: 100%; border-collapse: collapse; background-color: white; color: black;">
                <tr style="background-color: #ddd;">
                    <th colspan="2">Director of Photography</th>
                    <th colspan="2">Chairperson of IHMAD</th>
                </tr>
                <tr>
                    <td rowspan="2">2020</td>
                    <td>Demak</td>
                    <td rowspan="2">2021</td>
                    <td>Demak</td>
                </tr>
                <tr>
                    <td>Indonesia</td>
                    <td>Indonesia</td>
                </tr>
                <tr>
                    <td colspan="2">Responsible for cinematography in short films</td>
                    <td colspan="2">Led the student community in the Islamic boarding school</td>
                </tr>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
