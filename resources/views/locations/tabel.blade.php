<div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>{{ $title }} Data</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No.</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">LOCATION NAME</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">MAX MOTORCYCLE</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">MAX CAR</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">MAX TRUCK/BUS/OTHER</th>
                    </tr>
                  </thead>
                      @foreach ($datas as $nmr => $data)
                    <tr>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $nmr + 1 }}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $data->location_name }}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $data->max_motorcycle }}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $data->max_car }}</p>
                      </td>
                      <td>
                        <p class="text-sm font-weight-bold mb-0">{{ $data->other }}</p>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>