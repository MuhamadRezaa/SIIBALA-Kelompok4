<div class="card navDataMaster mb-5">
    <div class="button-group d-flex flex-row p-3">
        <button id="btn-mahasiswa" class="btn btn-primary me-3" onclick="navigateTo('/admin/mahasiswa')">
            Mahasiswa
        </button>
        <button id="btn-dosen" class="btn btn-primary me-3" onclick="navigateTo('/admin/dosen')">
            Dosen
        </button>
        <button id="btn-staff" class="btn btn-primary me-3" onclick="navigateTo('/admin/staff')">
            Staff
        </button>
        <button id="btn-user" class="btn btn-primary me-3" onclick="navigateTo('/admin/user')">
            User
        </button>
        <button id="btn-prodi" class="btn btn-primary me-3" onclick="navigateTo('/admin/prodi')">
            Program Studi
        </button>
        <button id="btn-bagian" class="btn btn-primary me-3" onclick="navigateTo('/admin/bagian')">
            Bagian Kerja
        </button>
        <button id="btn-ruangan" class="btn btn-primary me-3" onclick="navigateTo('/admin/ruangan')">
            Ruangan
        </button>
    </div>
</div>

<script>
    function navigateTo(url) {
        window.location.href = url;
    }
</script>
