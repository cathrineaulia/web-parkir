<div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>{{ $title }} Input Form</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <form action="{{ route('locations.store') }}" method="post" id="frm">
                @csrf
              <div class="table-responsive p-0">
                  <div class="m-3">
                    <label for="judul" class="form-label">Location Name</label>
                    <input type="text" class="form-control" id="location_name" name="location_name" placeholder="Input Location Name">
                  </div>
                  <div class="m-3">
                    <label for="jenis" class="form-label">Max Motorcycle</label>
                    <input type="number" class="form-control" id="max_motorcycle" name="max_motorcycle" placeholder="Input Max Motorcycle">
                  </div>
                  <div class="m-3">
                    <label for="tahun_terbit" class="form-label">Max Car</label>
                    <input type="number" class="form-control" id="max_car" name="max_car" placeholder="Input Max Car">
                  </div>
                  <div class="m-3">
                    <label for="penulis" class="form-label">Max Tryck/Bus/Other</label>
                    <input type="number" class="form-control" id="other" name="other" placeholder="Input Other">
                  </div>
                  <div class="m-3 d-flex gap-3 mt-4">
                      <a href="{{route('locations.index')}}" class="btn btn-dark flex-fill">Cancel</a>
                      <button type="button" class="btn btn-primary flex-fill" id="btnSimpan">Save New {{$title}}</button>
                  </div>
              </div>
            </div>
            </form>
          </div>
        </div>

    <script>
      var frm = document.getElementById('frm');
      var btnSimpan = document.getElementById('btnSimpan');
      var location_name = document.getElementById('location_name');
      var max_motorcycle = document.getElementById('max_motorcycle');
      var max_car = document.getElementById('max_car');
      var other = document.getElementById('other');

      btnSimpan.addEventListener('click', function(){
        if(location_name.value.trim() === ''){
          location_name.focus();
          swal("Invalid Data!", "Location Name cannot be empty!", "error");
        } else if(max_motorcycle.value.trim() === ''){
          max_motorcycle.focus();
          swal("Invalid Data!", "Max Motorcycle cannot be empty!", "error");
        } else if(max_car.value.trim() === ''){
          max_car.focus();
          swal("Invalid Data!", "Max Car cannot be empty!", "error");
        } else if(other.value.trim() === ''){
          other.focus();
          swal("Invalid Data!", "Other cannot be empty!", "error");
        } else {
          frm.submit();
        }
      });
    </script>
      </div>