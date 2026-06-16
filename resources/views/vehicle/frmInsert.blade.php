<div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>{{ $title }} Input Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <form action="{{ route('vehicle.store') }}" method="post" id="frm">
                @csrf
              <div class="table-responsive p-0">
                <div class="m-3">
                <label for="jk" class="form-label">Vehicle Type</label>
                <select class="form-select" id="jenis" name="jenis">
                    <option value="">Select Vehicle Type</option>
                    <option value="motorcycle">Motorcycle</option>
                    <option value="car">car</option>
                    <option value="other">other</option>
                </select>
                </div>
                <div class="m-3">
                <label for="jenis" class="form-label">First Hour Charges</label>
                <input type="number" class="form-control" id="perjam_pertama" name="perjam_pertama" placeholder="Input First Hour Charges">
                </div>
                <div class="m-3">
                <label for="tahun_terbit" class="form-label">Next Hourly Charges</label>
                <input type="number" class="form-control" id="perjam_berikutnya" name="perjam_berikutnya" placeholder="Input Next Hourly Charges">
                </div>
                <div class="m-3">
                <label for="penulis" class="form-label">Max Cost Per Day</label>
                <input type="number" class="form-control" id="max_perhari" name="max_perhari" placeholder="Input Max Cost Per Day">
                </div>
                <div class="m-3 d-flex gap-3 mt-4">
                    <a href="{{route('vehicle.index')}}" class="btn btn-dark flex-fill">Cancel</a>
                    <button type="submit" class="btn btn-primary flex-fill" id="btnSimpan">Save New {{$title}}</button>
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>

    <script>
      var frm = document.getElementById('frm');
      var btnSimpan = document.getElementById('btnSimpan');
      var jenis = document.getElementById('jenis');
      var perjam_pertama = document.getElementById('perjam_pertama');
      var perjam_berikutnya = document.getElementById('perjam_berikutnya');
      var max_perhari = document.getElementById('max_perhari');
    
      btnSimpan.addEventListener('click', function(){
        if(jenis.value.trim() === ''){
          jenis.focus();
          swal("Invalid Data!", "Type cannot be empty!", "error");
        } else if(perjam_pertama.value.trim() === ''){
          perjam_pertama.focus();
          swal("Invalid Data!", "First Hour cannot be empty!", "error");
        } else if(perjam_berikutnya.value.trim() === ''){
          perjam_berikutnya.focus();
          swal("Invalid Data!", "Next Hour cannot be empty!", "error");
        } else if(max_perhari.value.trim() === ''){
          max_perhari.focus();
          swal("Invalid Data!", "Max Day cannot be empty!", "error");
        } else {
          frm.submit();
        }
      });

    </script>
      </div>