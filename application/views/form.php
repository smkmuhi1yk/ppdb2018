<style type="text/css">
/* Adjust feedback icon position */
#movieForm .form-control-feedback {
    right: 15px;
}
#movieForm .selectContainer .form-control-feedback {
    right: 25px;
}
</style>

<form id="movieForm" method="post">
    <div class="form-group">
        <div class="row">
            <div class="col-xs-8">
                <label class="control-label">Movie title</label>
                <input type="text" class="form-control" name="title" />
            </div>

            <div class="col-xs-4 selectContainer">
                <label class="control-label">Genre</label>
                <select class="form-control" name="genre">
                    <option value="">Choose a genre</option>
                    <option value="action">Action</option>
                    <option value="comedy">Comedy</option>
                    <option value="horror">Horror</option>
                    <option value="romance">Romance</option>
                </select>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-4">
                <label class="control-label">Director</label>
                <input type="text" class="form-control" name="director" />
            </div>

            <div class="col-xs-4">
                <label class="control-label">Writer</label>
                <input type="text" class="form-control" name="writer" />
            </div>

            <div class="col-xs-4">
                <label class="control-label">Producer</label>
                <input type="text" class="form-control" name="producer" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-xs-6">
                <label class="control-label">Website</label>
                <input type="text" class="form-control" name="website" />
            </div>

            <div class="col-xs-6">
                <label class="control-label">Youtube trailer</label>
                <input type="text" class="form-control" name="trailer" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label">Review</label>
        <textarea class="form-control" name="review" rows="8"></textarea>
    </div>

    <div class="form-group">
        <label class="control-label">Rating</label>
        <div>
            <label class="radio-inline">
                <input type="radio" name="rating" value="terrible" /> Terrible
            </label>
            <label class="radio-inline">
                <input type="radio" name="rating" value="watchable" /> Watchable
            </label>
            <label class="radio-inline">
                <input type="radio" name="rating" value="best" /> Best ever
            </label>
        </div>
    </div>

    <button type="submit" class="btn btn-default">Validate</button>
</form>

<script>
$(document).ready(function() {
    $('#movieForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            title: {
                row: '.col-xs-8',
                validators: {
                    notEmpty: {
                        message: 'The title is required'
                    },
                    stringLength: {
                        max: 200,
                        message: 'The title must be less than 200 characters long'
                    }
                }
            },
            genre: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The genre is required'
                    }
                }
            },
            director: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The director name is required'
                    },
                    stringLength: {
                        max: 80,
                        message: 'The director name must be less than 80 characters long'
                    }
                }
            },
            writer: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The writer name is required'
                    },
                    stringLength: {
                        max: 80,
                        message: 'The writer name must be less than 80 characters long'
                    }
                }
            },
            producer: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The producer name is required'
                    },
                    stringLength: {
                        max: 80,
                        message: 'The producer name must be less than 80 characters long'
                    }
                }
            },
            website: {
                row: '.col-xs-6',
                validators: {
                    notEmpty: {
                        message: 'The website address is required'
                    },
                    uri: {
                        message: 'The website address is not valid'
                    }
                }
            },
            trailer: {
                row: '.col-xs-6',
                validators: {
                    notEmpty: {
                        message: 'The trailer link is required'
                    },
                    uri: {
                        message: 'The trailer link is not valid'
                    }
                }
            },
            review: {
                // The group will be set as default (.form-group)
                validators: {
                    stringLength: {
                        max: 500,
                        message: 'The review must be less than 500 characters long'
                    }
                }
            },
            rating: {
                // The group will be set as default (.form-group)
                validators: {
                    notEmpty: {
                        message: 'The rating is required'
                    }
                }
            }
        }
    });
});
</script>