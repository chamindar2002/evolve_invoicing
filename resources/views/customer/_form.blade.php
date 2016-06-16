<fieldset>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('name',null,['class'=>'form-control', 'placeholder'=>'Customer\'s Name']) !!}
            <span class="input-group-addon" id="basic-addon2">Name</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('address_1',null,['class'=>'form-control', 'placeholder'=>'Address Line 1']) !!}
            <span class="input-group-addon" id="basic-addon2">Address</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('address_2',null,['class'=>'form-control', 'placeholder'=>'Address Line 2']) !!}
            <span class="input-group-addon" id="basic-addon2">Address</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('city',null,['class'=>'form-control', 'placeholder'=>'City']) !!}
            <span class="input-group-addon" id="basic-addon2">City</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('post_code',null,['class'=>'form-control', 'placeholder'=>'Post Code']) !!}
            <span class="input-group-addon" id="basic-addon2">Post Code</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('country_id',null,['class'=>'form-control', 'placeholder'=>'Country']) !!}
            <span class="input-group-addon" id="basic-addon2">Country</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('email',null,['class'=>'form-control', 'placeholder'=>'Email']) !!}
            <span class="input-group-addon" id="basic-addon2">Email</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('phone',null,['class'=>'form-control', 'placeholder'=>'Phone']) !!}
            <span class="input-group-addon" id="basic-addon2">Phone</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('mobile',null,['class'=>'form-control', 'placeholder'=>'Mobile']) !!}
            <span class="input-group-addon" id="basic-addon2">Mobile</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('fax',null,['class'=>'form-control', 'placeholder'=>'Fax']) !!}
            <span class="input-group-addon" id="basic-addon2">Fax</span>
        </div>
    </div>

    <div class='form-group'>
        <div class="input-group">
            {!! Form::text('comments',null,['class'=>'form-control', 'placeholder'=>'Comments']) !!}
            <span class="input-group-addon" id="basic-addon2">Comments</span>
        </div>
    </div>

</fieldset>



<div class='form-group'>
    {!! Form::label('object_url','&nbsp;', ['class'=>'col-md4 control-label']) !!}
    <div class='col-md-6'>
        {!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
    </div>
</div>

