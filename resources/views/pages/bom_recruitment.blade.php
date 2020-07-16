@extends('layouts.app')

@section('content')
    <div class="container mt-5 pt-5 py-5">
        <div class="card rounded-bottom px-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="thead-light">
                            <th scope="col" class="align-middle text-center">ID</th>
                            <th scope="col" class="align-middle text-center">NIM</th>
                            <th scope="col" class="align-middle text-center">Name</th>
                            <th scope="col" class="align-middle text-center">Major</th>
                            <th scope="col" class="align-middle text-center">Email</th>
                            <th scope="col" class="align-middle text-center">Phone Number</th>
                            <th scope="col" class="align-middle text-center">Line ID</th>
                            <th scope="col" class="align-middle text-center" colspan="2">Action</th>
                        </thead>
                        <tbody>
                            @foreach ($bom_recruitment as $bom_recruitments)
                                <tr>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center"></td>
                                    <td class="align-middle text-center">
                                        <i type="button" data-toggle="modal"data-target="#exampleModalCenter" class="fas fa-address-card fa-2x"></i>
                                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Division Preferences
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body mo-res text-left">
                                                        <p>1st division preference: </p>
                                                        <p> {{ $bom_recruitments->division_preference1}}</p>
                                                        <p> Reason(s): </p>
                                                        <p> {{ $bom_recruitments->division_preference1_reason }}</p>
                                                        <hr>
                                                        <p>2nd division preference: </p>
                                                        <p> {{ $bom_recruitments->division_preference2}}</p>
                                                        <p> Reason(s): </p>
                                                        <p> {{ $bom_recruitments->division_preference2_reason }}</p>
                                                        <hr>
                                                        <p>3rd division preference: </p>
                                                        <p> {{ $bom_recruitments->division_preference3}}</p>
                                                        <p> Reason(s): </p>
                                                        <p> {{ $bom_recruitments->division_preference3_reason }}</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <form method="POST" action="{{ action('BomRecruitmentController@delete', $bom_recruitments->id) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button class="btn btn-sm btn-block btn-dark text-white" type="submit">D</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

