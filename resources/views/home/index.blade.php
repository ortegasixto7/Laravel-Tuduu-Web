@extends('layouts.app')
@section('title', '')
@section('content')
<div class="row mt-4">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <ul class="list-group list-group-flush">
          <div class="d-flex mb-4">
            <input
              type="text"
              class="form-control"
              placeholder="What do you need to do today?"
            />
            <button class="btn btn-primary font-weight-bold ml-1">
              Add
            </button>
          </div>
          <li class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" />
              <label class="form-check-label" for="defaultCheck1">
                Cras justo odio
              </label>
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </li>
          <li class="list-group-item">
            <div class="form-check">
              <input
                class="form-check-input"
                type="checkbox"
                value=""
                id="defaultCheck2"
                checked
              />
              <label
                class="form-check-label"
                for="defaultCheck2"
                style="text-decoration: line-through;"
              >
                Cras justo odio
              </label>
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </li>
          <li class="list-group-item">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" />
              <label class="form-check-label" for="defaultCheck3">
                Cras justo odio
              </label>
              <button type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection