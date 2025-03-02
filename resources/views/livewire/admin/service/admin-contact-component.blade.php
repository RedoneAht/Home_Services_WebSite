<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>

                <h1>Contacts</h1>


                            <div class="panel panel-default" style="font-weight: 600;">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-6">
                                            Tous les contacts
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nom</th>
                                                <th>E-mail</th>
                                                <th>Téléphone</th>
                                                <th>Message</th>
                                                <th>Créé à</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if($contacts->count() > 0)
                                                @foreach ($contacts as $contact)
                                                    <tr>
                                                        <td>{{ $contact->id }}</td>
                                                        <td>{{ $contact->name }}</td>
                                                        <td>{{ $contact->email }}</td>
                                                        <td>{{ $contact->phone }}</td>
                                                        <td>{{ $contact->message }}</td>
                                                        <td>{{ $contact->created_at }}</td>
                                                        <td><button wire:click="answerMessage({{ $contact->id }})" class="btn btn-success">Répondre</button>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="9" class="text-center" style="color:red;"><strong>Aucun contact disponible.</strong></td>
                                                </tr>
                                            @endif
                                        </tbody>
                                    </table>
                                    {{ $contacts->links() }}
                                </div>
                            </div>
                        
</div>
