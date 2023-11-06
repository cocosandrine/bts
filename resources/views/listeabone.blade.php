@extends("layout")
@section("content")
<h3 class="text-center mt-4">Liste abonnement</h3>

<div class="table-wrapper">
    <br>
<a href="" class="btn info">Imprimer </a>
<a href="/formabone" class="btn btn-primary">Ajout abonnement </a>
   <br>


<table class="fl-table">
        <thead>
            <tr>
            <th>Id</th>
            <th>Nom abonnement</th>
            <th>Nom client</th>
            <th>date début </th>
            <th>date fin</th>
            <th>Actions</th>


        </tr>
    </thead>
        <tbody>



            <tr>
                <td></td>





                <td>
                    <a href="" class="btn btn-info">Modifier</a>
                    <a href="" class="btn btn-danger">Supprimer</a>
                </td>


            </tr>

        </tbody>
    </table>


</div>

<style>
    .small{
    display: none!important;
}
</style>

@endsection
