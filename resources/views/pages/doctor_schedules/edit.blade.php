@extends('layouts.app')

@section('title', 'Add Doctor Schedule')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Advanced Forms</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Doctor Schedules</div>
                </div>
            </div>

            <div class="section-body">
                <h2 class="section-title">Schedules</h2>



                <div class="card">
                    <form action="{{ route('doctor-schedules.update', $doctorSchedule->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Input Text</h4>
                        </div>

                        <div class="card-body">
                            <div class="form-group">
                                <label>Doctor</label>
                                <select
                                    class="form control selectric @error('doctor_id')
                                    is-invalid
                                @enderror"
                                    name="doctor_id">
                                    <option value="">Select Doctor</option>
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}"
                                            @if ($doctor->id == $doctorSchedule->doctor_id) selected @endif>{{ $doctor->doctor_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('doctor_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Jadwal Monday</label>
                                <input type="text" class="form-control" name="monday"
                                    value="{{ $doctorSchedule->senin }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Tuesday</label>
                                <input type="text" class="form-control" name="tuesday"
                                    value="{{ $doctorSchedule->selasa }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Wednesday</label>
                                <input type="text" class="form-control" name="wednesday"
                                    value="{{ $doctorSchedule->rabu }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Thursday</label>
                                <input type="text" class="form-control" name="thursday"
                                    value="{{ $doctorSchedule->kamis }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Friday</label>
                                <input type="text" class="form-control" name="friday"
                                    value="{{ $doctorSchedule->jumat }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Saturday</label>
                                <input type="text" class="form-control" name="Saturday"
                                    value="{{ $doctorSchedule->sabtu }}">
                            </div>
                            <div class="form-group">
                                <label>Jadwal Sunday</label>
                                <input type="text" class="form-control" name="sunday"
                                    value="{{ $doctorSchedule->minggu }}">
                            </div>

                            {{-- <div class="form-group mb-0">
                                <label>Note</label>
                                <textarea class="form-control" name="note" id=""></textarea>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="active" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Active</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="status" value="inactive" class="selectgroup-input">
                                        <span class="selectgroup-button">Inactive</span>
                                    </label>
                                </div>
                            </div> --}}

                            <div class="card-footer text-right">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
