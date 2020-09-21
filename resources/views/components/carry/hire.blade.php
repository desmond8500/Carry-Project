<div>
    <!-- Act only according to that maxim whereby you can, at the same time, will that it should become a universal law. - Immanuel Kant -->
    <div class="card">
        <div class="card-body">
            <form action="" method="get">
                @csrf

                <div class="form-group">
                    <label for="">Point de départ</label>
                    <select name="depart" class="form-control">
                        <option value="1">Dakar</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Destination</label>
                    <select name="depart" class="form-control">
                        <option value="2">Thiès</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Trouver</button>

            </form>


        </div>
    </div>

</div>
