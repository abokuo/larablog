import algoliasearch from 'algoliasearch';
import autocomplete from 'autocomplete.js';

const client = algoliasearch(algoliaId, algoliaSearchKey);
const posts = client.initIndex(algoliaIndex);

function newHitsSource(index, params) {
    return function doSearch(query, cb) {
        index
            .search(query, params)
            .then(function (res) {
                cb(res.hits, res);
            })
            .catch(function (err) {
                console.error(err);
                cb([]);
            });
    };
}

autocomplete(
    '#aa-search-input',
    {
        hint: false,
        templates: {
            dropdownMenu: '<div class="aa-dataset-post"></div>',
            footer: 'Search By Algolia'
        }
    },
    [
        {
            source: newHitsSource(posts, { hitsPerPage: 10 }),
            displayKey: 'title',
            templates: {
                header: '<div class="aa-suggestions-category">文章</div>',
                suggestion: function (suggestion) {
                    return `
                        <span class="w-100">
                            <a class="link-secondary text-decoration-none d-block w-100" href="${suggestion.url}">
                                ${suggestion._highlightResult.title.value}
                            </a>
                        </span>
                    `;
                },
                empty:
                    '<div class="d-flex justify-content-center align-items-center p-3">找不到符合搜尋字詞的文章</div>'
            }
        }
    ]
).on('autocomplete:selected', function (event, suggestion) {
    location.href = suggestion.url;
});
