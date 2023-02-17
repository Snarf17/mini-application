<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mini Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>

  <!-- Input Data Club -->
  @error('nama_klub')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  @error('kota_klub')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  <div class="container my-5">
      <form  method="post">
        @csrf
        <div class="mb-3">
            <label for="nama-klub" class="form-label">Nama Klub</label>
            <input type="text" name="nama_klub"  class="form-control @error('nama_klub') is-invalid @enderror" id="nama-klub">
        </div>
        <div class="mb-3">
            <label for="kota-klub" class="form-label">Kota Klub</label>
            <input type="text" name="kota_klub" class="form-control @error('kota_klub') is-invalid @enderror" id="kota-klub">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
      
      <!-- Input Data Score -->
      <form class="row g-3 d-flex flex-column" method="post">
        <div class="tim d-flex gap-5 align-items-center justify-content-center">
            <div class="col-2">
                <label for="inputState" class="form-label">Klub 1</label>
                <select id="inputState" name="nama_klub" class="form-select" name="">
                <option hidden>-- Pilih Klub --</option>
                @foreach($pertandingan as $data_club)
                    <option value={{$data_club->id}}>{{$data_club->nama_klub}}</option>
                @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="inputState" class="form-label">Klub 2</label>
                <select id="inputState" nama="nama_klub" class="form-select">
                <option hidden>-- Pilih Klub --</option>
                @foreach($pertandingan as $data_club)
                    <option value={{$data_club->id}}>{{$data_club->nama_klub}}</option>
                @endforeach
                </select>
            </div>
        </div>
        <h4 class="d-flex justify-content-center mt-4">VS</h4>
        <div class="score d-flex gap-5 align-items-center justify-content-center">
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Score 1</label>
                <input type="number" name="ma" class="form-control" id="inputZip">
            </div>
            <div class="col-md-2">
                <label for="inputZip" class="form-label">Score 2</label>
                <input type="number" name="ma" class="form-control" id="inputZip">
            </div>
        </div>
       <div class="d-flex justify-content-center">
           <button type="submit" class="btn btn-primary w-25">Save</button>
       </div>
      </form>  
      <table class="table mt-5">
        <thead>
        <h1>Klasment</h1>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Club</th>
          <th scope="col">Ma</th>
          <th scope="col">Me</th>
          <th scope="col">S</th>
          <th scope="col">K</th>
          <th scope="col">GM</th>
          <th scope="col">GK</th>
          <th scope="col">Point</th>
        </tr>
        </thead>
        <tbody>
            @foreach($pertandingan as $items)
            <tr class="text-capitalize">
            <th scope="row">{{$loop->index + 1}}</th>
            <td>{{$items->nama_klub}}</td>
            <td>{{$items->ma}}</td>
            <td>{{$items->me}}</td>
            <td>{{$items->s}}</td>
            <td>{{$items->k}}</td>
            <td>{{$items->gm}}</td>
            <td>{{$items->gk}}</td>
            <td>{{$items->point}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
  </div> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
