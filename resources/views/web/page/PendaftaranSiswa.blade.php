@extends('cms.layout.TemplateAdmin')
@section('content')
    <div class="col-md-12">
        <div class="card-alert" id="card-alert"></div>
        @if ($data)
            @include('web.layout.TableDataPendaftar')
        @else
            <div id="body-form">
                @include('web.layout.FormPendaftaran')
            </div>
        @endif
    </div>
@endsection
@section('js')
    <script>
        const hideFunc = () => {
            $('#tab-walimurid').hide();
            $('#tab-siswa').hide();
            $('#tab-preview').hide();
        }

        $(document).ready(function() {
            $('#form-wali').hide();
            hideFunc();
            $('#tab-walimurid').show();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

        });
        $(document).on('click', '#btn-formwali', function() {
            if ($('#form-wali').is(':visible')) {

                $('#form-wali').hide('1000');
                $(this).html(`<i class="fas fa-plus"></i>Tambah Wali`);

            } else {
                $('#form-wali').fadeIn('slow').show();
                $(this).html(`<i class="fas fa-minus"></i> Hapus Wali`);
            }
        });

        $(".step-icon button").click(function() {
            $(".step-icon button").removeClass('btn-primary');
            $(this).addClass('btn-primary');
            let _id = $(this).data('id');

            hideFunc();
            $(`#${_id}`).fadeIn('slow').show();
        });

        const stepFunc = (element) => {

            if (element.id == 'next-button') {
                let value1 = element.value;
                let value2 = parseInt($('#pre-button').val());
                element.value = parseInt(value1) + 1;
                $('#pre-button').val(value2 + 1);
                $('#pre-button').prop('disabled', value1 > 1 | value1 < 3 ? false : true);
            } else {
                let value1 = element.value;
                let value2 = $('#next-button').val();
                element.value = value1 - 1;
                $('#next-button').val(value2 - 1);
                $('#next-button').prop('disabled', value1 > 1 | value1 < 2 ? false : true);
            }

            element.disabled = element.value >= 2 | element.value <= 1 ? true : false;
            switch (element.value) {
                case "2":
                    hideFunc();
                    $('#button-siswa').trigger('click');
                    break;

                default:
                    hideFunc();
                    $('#button-walimurid').trigger('click');
                    break;
            }
        }

        $(document).on('click', '#kirim-data', function() {
            let url = `{{ config('app.url') }}/user/pendaftaran_process`;
            let data = $('#form-walimurid').serialize();
            $.ajax({
                url: url,
                type: "POST",
                data: data,
                success: function(result) {
                    console.log(result);
                },
                error: function(err) {
                    console.log(err);
                    let data = err.responseJSON
                    let errorRes = data.errors
                    Swal.fire({
                        icon: data.response.icon,
                        title: data.response.title,
                        text: data.response.message,
                    });
                    if (errorRes.length >= 1) {
                        $('.miniAlert').html('');
                    }
                }
            });
        });
    </script>
@endsection
